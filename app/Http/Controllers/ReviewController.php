<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin', ['only' => [
            'create',
            'edit',
            'update',
            'destroy'
        ]]);   
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::all();
        $reviewAmount = $reviews->count();
        $stars = 0;
        if ($reviewAmount !== 0) {
            foreach($reviews as $review) {
                $stars += $review->stars;
            }
            $stars /= $reviewAmount;
            $stars = round($stars, 1);
        }

        return view('reviews.index', compact('reviews', 'stars', 'reviewAmount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Review::create($this->validateReview($request));

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        return view('reviews.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->back();
    }

    public function validateReview(Request $request) {
        $reviewArray = $request->validate([
            'review' => 'required',
            'stars' => ['required', 'integer', 'min:2', 'max:10']
        ]);
        $reviewArray['stars'] = $reviewArray['stars'] / 2;
        return $reviewArray;
    }
}
