<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Participation;
use App\Period;
use App\Winner;
use Carbon\Carbon;
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
        $today = Carbon::now();
        $periods = Period::all();
        
        //get current period
        foreach($periods as $period){
            if($period->begin <= $today->toDateString() && $period->end >= $today->toDateString()){
                $current_period = $period->id;
            }
        }

        //get participations from current period
        $participations = Participation::all()->where('period_id', $current_period);
        
        //get likes count
        $partLikeCount = Participation::first();
        if($partLikeCount) {
            $partLikeCount->like_count;
        }

        //get winner
        $winner = DB::table('likes')->select(DB::raw('count(participation_id) as occurrences, participation_id'))->groupBy('participation_id')->orderBy('occurrences','desc')->limit(1)->get();
      if ($winner->isEmpty()){

      } else {
        $winner_id = $winner[0]->participation_id;
        
            $winner_participation = Participation::findOrFail($winner_id);
            $period_id = $winner_participation->period_id;
            
            $period = Period::findOrFail($period_id);
        
            //choose winner of current period
            $period_end = $period->end;
            if ($period_end == $today->toDateString()){
                    $winner_period = Winner::all()->where('period_id',$period_id);
                    if(!$winner_period){
                        $winner = new Winner;
                        $winner->user_id = $winner_id;
                        $winner->period_id = $period->id;
                        $winner->save();
                    }
                    
                    
            }
      }
        
        
        $winners = Winner::all();
        $users = User::all();

        return view('home',compact('participations','partLikeCount','winners','users'));
    }  
}
