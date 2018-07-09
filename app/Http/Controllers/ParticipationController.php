<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Participation;
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

    public function upload(){      
        if(Input::hasFile('file')){
            $participation = new Participation;
            echo 'Uploaded';
            $file = Input::file('file');
            $file->move('uploads', $file->getClientOriginalName());
           // echo '<img src="uploads/'.$file->getClientOriginalName().'/>"';

            $participation->file = $file->getClientOriginalName();
            $participation->period_id = 1;
            $participation->user_id = Auth::user()->id;
            $participation->save();
            return redirect('/home');
        }
    }
}