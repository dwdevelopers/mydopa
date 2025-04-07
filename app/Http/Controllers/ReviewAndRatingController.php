<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RatingAndReview;
use App\Services\RatingService;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RatingRequest;

class ReviewAndRatingController extends Controller
{
    protected $ratingService;

    public function __construct(RatingService $ratingService)
    {
        $this->ratingService = $ratingService;
    }
    public function index()
    {
        //
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
    public function store(RatingRequest $request)
    {

        $data = $request->validated();
        ;
        DB::beginTransaction();
        try {

           $x= $this->ratingService->createRating($data);

            DB::commit();
            return redirect()->back()->with('success', 'Thank you for your review!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Error submitting review. Please try again.');
        }
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
    public function destroy(string $id)
    {
        //
    }
}
