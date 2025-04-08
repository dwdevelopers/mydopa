<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\NewsletterSubscriber;
use Yajra\DataTables\Facades\DataTables;

class NewsLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'News Letter', 'url' => route('newsletter.index')],
            ['name' => 'Lists', 'url' => null] // Null for the current page
        ];

        if ($request->ajax()) {
            $newsLetters = NewsletterSubscriber::get();

            return DataTables::of($newsLetters)
                ->addIndexColumn() // Adds an index column if needed
                ->addColumn('status', function ($row) {
                    return $row->status
                        ? '<span class="badge bg-success">Active</span>'
                        : '<span class="badge bg-danger">Inactive</span>';
                })
                ->addColumn('action', function ($row) {
                    return '
                            <form action="'.route('newsletter.destroy', $row->id).'" method="POST" style="display:inline;">
                                '.csrf_field().'
                                '.method_field("DELETE").'
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>';
                })
                ->rawColumns(['action', 'status']) // Allows HTML rendering in the action column
                ->make(true);
        }

        return view('admin.news.index', compact('breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
        $subscriber = NewsletterSubscriber::findOrFail($id);
        $subscriber->delete();

        return redirect()->route('newsletter.index')->with('success', 'Subscriber deleted successfully!');
    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->back()->withErrors('Error deleting Subscriber. Please try again.');
    }
    }

}
