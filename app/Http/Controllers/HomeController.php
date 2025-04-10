<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FAQService;
use App\Services\QuestionService;
use App\Services\RatingService;

class HomeController extends Controller
{
    protected $faqService, $questionService, $ratingService;

    public function __construct(FAQService $faqService, QuestionService $questionService, RatingService $ratingService)
    {
        $this->faqService = $faqService;
        $this->questionService = $questionService;
        $this->ratingService = $ratingService;
    }

    private function getCommonData()
    {
        $faqs = $this->faqService->paginateFaqs(10);
        $questions = $this->questionService->paginateQuestions(10);
        $ratings = $this->ratingService->paginateRatings(10);

        $rating_count = $ratings->count();
        $question_count = $questions->count();
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

        return compact('faqs', 'questions', 'ratings', 'rating_count', 'question_count', 'averageRating', 'ratingData');
    }

    public function index()
    {
        $data = $this->getCommonData();
        return view('website.home', $data);
    }

    public function about(Request $request)
    {
        return view('website.about_us');
    }

    public function shop(Request $request)
    {
        $data = $this->getCommonData();
        return view('website.shop', $data);
    }

    public function contactUS(Request $request)
    {
        return view('website.contact_us');
    }
}
