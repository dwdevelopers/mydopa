<?php

namespace App\Http\Controllers;
use App\Services\FAQService;
use App\Services\QuestionService;
use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Services\RatingService;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct(FAQService $faqService,QuestionService $questionService,RatingService $ratingService)
    {
        // $this->middleware('auth');
        $this->faqService = $faqService;
        $this->questionService = $questionService;
        $this->ratingService = $ratingService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $faqs = $this->faqService->getAllFaqs();
        $questions = $this->questionService->getAllQuestions();
        $ratings=$this->ratingService->getAllRatings();
        $rating_count=$ratings->count();
        $question_count=$questions->count();
        $averageRating = $ratings->avg('rating');
        $ratingData = [];
        for ($i = 1; $i <= 5; $i++) {
            $countForStar = $ratings->where('rating', $i)->count();
            $percentage = $rating_count > 0 ? round(($countForStar / $rating_count) * 100) : 0;
            $ratingData[$i] = [
                'count'      => $countForStar,
                'percentage' => $percentage,
            ];
        }
        return view('website.home',compact('faqs','questions','ratings','rating_count','question_count','ratingData','averageRating'));
    }
    public function about(Request $request)
    {

        return view('website.about_us');
    }
    public function shop(Request $request)
    {
        $questions = $this->questionService->getAllQuestions();
        $ratings=$this->ratingService->getAllRatings();
        $rating_count=$ratings->count();
        $question_count=$questions->count();
        $averageRating = $ratings->avg('rating');
        $ratingData = [];
        for ($i = 1; $i <= 5; $i++) {
            $countForStar = $ratings->where('rating', $i)->count();
            $percentage = $rating_count > 0 ? round(($countForStar / $rating_count) * 100) : 0;
            $ratingData[$i] = [
                'count'      => $countForStar,
                'percentage' => $percentage,
            ];
        }
        return view('website.shop',compact('questions','ratings','rating_count','question_count','ratingData','averageRating'));
    }
    public function contactUS(Request $request)
    {

        return view('website.contact_us');
    }
}
