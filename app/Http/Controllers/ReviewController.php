<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function index()
    {
        $review = Review::all();
        return view('pages.review', compact('review'));
    }

    public function create()
    {
        $user = Auth::user();
        return view('pages.create-review', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product' => 'required',
            'review' => 'required',
            'rate' => 'required|numeric',
        ]);
        $user = Auth::user();
        $post = Review::create([
            'username' => $user->username,
            'product' => $request->product,
            'review' => $request->review,
            'rate' => $request->rate,
            'user_id' => $user->id
        ]);

        if ($post) {
            //redirect dengan pesan sukses
            return redirect()->route('review-create')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('review-create')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
}
