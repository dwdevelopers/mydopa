<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreQuestionRequest;
use App\Services\QuestionService;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    protected $questionService;

    public function __construct(QuestionService $questionService)
    {
        $this->questionService = $questionService;
    }

    public function store(StoreQuestionRequest $request)
    {

        $data = $request->validated();
        DB::beginTransaction();
        try {
            $data = $request->validated();
            $this->questionService->createQuestion($data);
            DB::commit();
            return redirect()->back()->with('success', 'Your question has been submitted!');
        }catch(\Exception $e){
            DB::rollBack();
            return redirect()->back()->withErrors('Error creating Questions. Please try again.');
        }
    }
}

