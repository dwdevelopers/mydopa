<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\QuestionService;
use App\Services\RatingService;
use App\Services\ContactUsService;

class HomeController extends Controller
{
    public function __construct(ContactUsService $contactUsService,QuestionService $questionService, RatingService $ratingService)
    {
        $this->middleware('auth');
        $this->questionService = $questionService;
        $this->ratingService = $ratingService;
        $this->contactUsService = $contactUsService;
    }
    public function index()
    {
        $breadcrumbs = [
            ['name' => 'Dashboard', 'url' => route('admin.home')],

            ['name' => 'Lists', 'url' => null] // Null for the current page
            ];
            $questions = $this->questionService->getAllQuestions();
            $ratings = $this->ratingService->getAllRatings();
            $teams = $this->contactUsService->getAllContactuses();
            $teamsCount=$teams->count();
            $rating_count = $ratings->count();
            $question_count = $questions->count();
        return view('admin.dashboard',compact('breadcrumbs','teamsCount','rating_count','question_count'));
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
    public function destroy(string $id)
    {
        //
    }
}
