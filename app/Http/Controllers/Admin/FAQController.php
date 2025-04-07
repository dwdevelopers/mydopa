<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\FAQService;
use App\Http\Requests\FAQRequest;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\FAQ;
use Illuminate\Support\Facades\Log;

class FAQController extends Controller
{
    protected $faqService;

    public function __construct(FAQService $faqService)
    {
        $this->middleware('auth');
        $this->faqService = $faqService;
    }

    /**
     * Display a listing of the FAQ resources.
     */
    public function index(Request $request)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'FAQs', 'url' => route('faqs.index')],
            ['name' => 'Lists', 'url' => null] // Null for the current page
        ];

        if ($request->ajax()) {
            $faqs = $this->faqService->getAllFaqs();

            return DataTables::of($faqs)
                ->addIndexColumn() // Adds an index column if needed
                ->addColumn('status', function ($row) {
                    return $row->is_active
                        ? '<span class="badge bg-success">Active</span>'
                        : '<span class="badge bg-danger">Inactive</span>';
                })
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('faqs.edit', $row->id).'" class="btn btn-primary btn-sm">Edit</a>
                            <form action="'.route('faqs.destroy', $row->id).'" method="POST" style="display:inline;">
                                '.csrf_field().'
                                '.method_field("DELETE").'
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>';
                })
                ->rawColumns(['action', 'status']) // Allows HTML rendering in the action column
                ->make(true);
        }

        return view('admin.faqs.index', compact('breadcrumbs'));
    }

    /**
     * Show the form for creating a new FAQ.
     */
    public function create()
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'FAQs', 'url' => route('faqs.index')],
            ['name' => 'Create', 'url' => null] // Null for the current page
        ];

        return view('admin.faqs.create', compact('breadcrumbs'));
    }

    /**
     * Store a newly created FAQ in storage.
     */
    public function store(FaqRequest $request)
    {

        DB::beginTransaction();
        try {
            $data = $request->validated();

            $this->faqService->createFaq($data);

            DB::commit();
            return redirect()->route('faqs.index')->with('success', 'FAQ Created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error creating FAQ. Please try again.');
        }
    }

    /**
     * Show the form for editing the specified FAQ.
     */
    public function edit(Faq $faq)
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'FAQs', 'url' => route('faqs.index')],
            ['name' => 'Edit', 'url' => null] // Null for the current page
        ];

        return view('admin.faqs.edit', compact('faq', 'breadcrumbs'));
    }

    /**
     * Update the specified FAQ in storage.
     */
    public function update(FaqRequest $request, Faq $faq)
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();

            $this->faqService->updateFaq($faq->id, $data);

            DB::commit();
            return redirect()->route('faqs.index')->with('success', 'FAQ updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error updating FAQ. Please try again.');
        }
    }

    /**
     * Remove the specified FAQ from storage.
     */
    public function destroy(Faq $faq)
    {
        DB::beginTransaction();
        try {
            $this->faqService->deleteFaq($faq->id);

            DB::commit();
            return redirect()->route('faqs.index')->with('success', 'FAQ deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('FAQ deletion failed: ' . $e->getMessage());
            return redirect()->back()->withErrors('Error deleting FAQ. Please try again.');
        }
    }
}
