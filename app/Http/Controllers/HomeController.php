<?php

namespace App\Http\Controllers;
use App\Services\FAQService;
use App\Services\QuestionService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct(FAQService $faqService,QuestionService $questionService)
    {
        // $this->middleware('auth');
        $this->faqService = $faqService;
        $this->questionService = $questionService;
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
        return view('website.home',compact('faqs','questions'));
    }
    public function about(Request $request)
    {

        return view('website.about_us');
    }
    public function shop(Request $request)
    {

        return view('website.shop');
    }
    public function contactUS(Request $request)
    {

        return view('website.contact_us');
    }
}
