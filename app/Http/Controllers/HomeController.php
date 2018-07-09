<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Participation;
use App\User;
use DB;

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

        $winner = DB::table('likes')->select(DB::raw('count(participation_id) as occurrences, participation_id'))->groupBy('participation_id')->orderBy('occurrences','desc')->limit(1)->get();
        $winner_id = $winner[0]->participation_id;
        
        $the_winner = User::findOrFail($winner_id);
        $winner_name = $the_winner->name;
        
        return view('home',compact('participations','partLikeCount','winner_name'));
    }
}
