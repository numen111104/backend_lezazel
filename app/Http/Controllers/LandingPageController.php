<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $username = explode(' ', $user->name);
        $username = $username[0];
        $reviews = Review::with('user') // Memuat relasi user
            ->where('ratings', '>=', 3) // Hanya rating yang lebih dari 3
            ->orderBy('ratings', 'desc')
            ->get();

            $userReview = null;
            $user ? $userReview = Review::where('user_id', $user->id)->first() : null;

        return view('landing', compact('reviews', 'userReview', 'username'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'ratings' => 'required|integer',
            'comment' => 'required|string|max:1000',
            'position' => 'required|string|max:255',
        ]);
        $review = new Review();
        $review->user_id = auth()->user()->id;
        $review->name = auth()->user()->name;
        $review->ratings = $request->ratings;
        $review->comment = $request->comment;
        $review->position = $request->position;
        $review->save();
        return redirect()->route('landing')->with('success', 'Review created successfully');
    }
}
