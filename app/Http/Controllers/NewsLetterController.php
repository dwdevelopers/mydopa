<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\NewsletterSubscriber;

class NewsLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email',
        ]);
        DB::beginTransaction();
        try {
        NewsletterSubscriber::create([
            'email' => $request->email,
        ]);
        DB::commit();
        return back()->with('success', 'Thanks for subscribing!');
    }catch(\Exception $e){
        DB::rollBack();
        return redirect()->back()->withErrors('Error creating Newsletter. Please try again.');
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
