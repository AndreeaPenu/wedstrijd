<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Participation;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $participations = Participation::all();
        $partLikeCount = Participation::first();
        if($partLikeCount) {
            $partLikeCount->like_count;
        }
        return view('home',compact('participations','partLikeCount'));
    }
}
