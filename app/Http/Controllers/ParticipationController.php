<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Participation;
use Carbon\Carbon;
use App\Period;
use App\Like;
use App\User;
use Auth;

class ParticipationController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function participate()
    {
        return view('competition/participate');
    }

    public function upload() 
    {      
        if(Input::hasFile('file')){
            $participation = new Participation;
            echo 'Uploaded';
            $file = Input::file('file');
            $file->move('uploads', $file->getClientOriginalName());
           // echo '<img src="uploads/'.$file->getClientOriginalName().'/>"';

            $participation->file = $file->getClientOriginalName();
            

            $today = Carbon::now();
            $periods = Period::all();

            // get right period
            foreach($periods as $period){
                if($period->begin <= $today->toDateString() && $period->end >= $today->toDateString()){
                    $current_period = $period->id;
                }
            }

            $participation->period_id = $current_period;
            $participation->user_id = Auth::user()->id;
            $participation->save();
            return redirect('/home');
        }
    }

    public function like(Request $request)
    {
        $part = $request->input('id');
        $int = (int)$part;
        $data = [
            'user_id' => Auth::id(),
            'participation_id' => $int
        ];
        Like::create($data);
        $user = User::findOrFail(Auth::id());
        $user->has_voted = 1;
        $user->save();

        return back();
    }
}
