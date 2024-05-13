<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function index()
    {
        $reviews = DB::table('reviews')
            ->where('ratings', '>=', 3) // Hanya rating yang lebih dari 3
            ->orderBy('ratings', 'desc')
            ->get();

        return view('landing', compact('reviews'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'ratings' => 'required|integer',
            'comment' => 'required|string|max:1000',
            'position' => 'required|string|max:255',

        ]);
        $review = new Review;
        $review->user_id = auth()->user()->id;
        $review->name = $request->name;
        $review->ratings = $request->ratings;
        $review->comment = $request->comment;
        $review->position = $request->position;
        $review->save();
        return redirect()->route('landing')->with('success', 'Review created successfully');
    }
}
