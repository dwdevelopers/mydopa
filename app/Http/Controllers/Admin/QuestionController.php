<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\QuestionService;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\Question;
use App\Http\Requests\StoreQuestionRequest;

class QuestionController extends Controller
{
    // protected $questionService;

    public function __construct(protected QuestionService $questionService)
    {
        $this->questionService = $questionService;
    }
    public function index(Request $request)
    {
        // Define breadcrumbs for the index page
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Question', 'url' => route('questions.index')],
            ['name' => 'Lists', 'url' => null] // Current page
        ];

        if ($request->ajax()) {
            $questions = $this->questionService->getAllQuestions();

            return DataTables::of($questions)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    return $row->status
                        ? '<span class="badge bg-success">Active</span>'
                        : '<span class="badge bg-danger">Inactive</span>';
                })
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('questions.edit', $row->id).'" class="btn btn-primary btn-sm">Edit</a>
                            <form action="'.route('questions.destroy', $row->id).'" method="POST" style="display:inline;">
                                '.csrf_field().'
                                '.method_field("DELETE").'
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>';
                })
                ->rawColumns(['action','status'])
                ->make(true);
        }

        return view('admin.question.index', compact('breadcrumbs'));
    }
    public function edit(Question $question)
{
    // Define breadcrumbs for the edit page
    $breadcrumbs = [
        ['name' => 'Dashboard', 'url' => route('admin.home')],
        ['name' => 'Questions', 'url' => route('questions.index')],
        ['name' => 'Edit', 'url' => null] // Current page
    ];


    return view('admin.question.edit', compact('question', 'breadcrumbs'));
}

public function update(StoreQuestionRequest $request, Question $question)
{

    DB::beginTransaction();
    try {
        $data = $request->validated();
        $this->questionService->updateQuestion($question->id, $data);



        DB::commit();
        return redirect()->route('questions.index')->with('success', 'Question updated successfully!');
    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->back()->withErrors('Error updating question. Please try again.');
    }
}

    public function destroy(Question $question)
    {
        DB::beginTransaction();
        try {

            // Delete the Question itself
            $question->delete();

            DB::commit();
            return redirect()->route('questions.index')->with('success', 'Question deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error deleting question. Please try again.');
        }
    }
}
