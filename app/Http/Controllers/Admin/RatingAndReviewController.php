<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RatingAndReview;
use App\Services\RatingService;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RatingRequest;


class RatingAndReviewController extends Controller
{
    protected $ratingService;

    public function __construct(RatingService $ratingService)
    {
        $this->ratingService = $ratingService;
    }
    public function index(Request $request)
    {
        // Define breadcrumbs for the index page
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Reviews', 'url' => route('reviews.index')],
            ['name' => 'Lists', 'url' => null] // Current page
        ];

        if ($request->ajax()) {
            $products = $this->ratingService->getAllRatings();

            return DataTables::of($products)
                ->addIndexColumn()
                ->addColumn('rating', function ($row) {
                    $stars = '<div class="stars">';
                    for ($i = 1; $i <= 5; $i++) {
                        $filled = $i <= $row->rating ? 'bx bxs-star text-warning' : 'bx bx-star text-muted';
                        $stars .= "<i class='{$filled} star' data-value='{$i}'></i>";
                    }
                    $stars .= '</div>';
                    return $stars;
                })

                ->addColumn('status', function ($row) {
                    return $row->status
                        ? '<span class="badge bg-success">Active</span>'
                        : '<span class="badge bg-danger">Inactive</span>';
                })
                ->addColumn('action', function ($row) {
                    return '<a href="'.route('reviews.edit', $row->id).'" class="btn btn-primary btn-sm">Edit</a>
                            <form action="'.route('reviews.destroy', $row->id).'" method="POST" style="display:inline;">
                                '.csrf_field().'
                                '.method_field("DELETE").'
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>';
                })
                ->rawColumns(['action','rating',  'status'])
                ->make(true);
        }

        return view('admin.reviews.index', compact('breadcrumbs'));
    }
    public function edit(RatingAndReview $review)
    {
        // Define breadcrumbs for the edit page
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],
            ['name' => 'Reviews', 'url' => route('reviews.index')],
            ['name' => 'Edit', 'url' => null] // Current page
        ];

        return view('admin.reviews.edit', compact('review', 'breadcrumbs'));
    }
    public function update(RatingRequest $request, RatingAndReview $review)
    {

        DB::beginTransaction();
        try {
            $data = $request->validated();
            $this->ratingService->updateRating($review->id, $data);

            DB::commit();
            return redirect()->route('reviews.index')->with('success', 'Review updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error updating review. Please try again.');
        }
    }
    public function destroy(RatingAndReview $review)
    {
        DB::beginTransaction();
        try {
            $review->delete();

            DB::commit();
            return redirect()->route('reviews.index')->with('success', 'Review deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error deleting review. Please try again.');
        }
    }

}
