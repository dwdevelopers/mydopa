<?php

namespace App\Http\Controllers;
use App\Services\FAQService;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(FAQService $faqService)
    {
        // $this->middleware('auth');
        $this->faqService = $faqService;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $faqs = $this->faqService->getAllFaqs();
        return view('website.home',compact('faqs'));
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
