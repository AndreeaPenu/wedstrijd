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
        return view('home',compact('participations'));
    }
}
