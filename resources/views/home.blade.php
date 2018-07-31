@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">      
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body text-center">
                <h1 class="text-center">Here is your chance to win the new Mario Bros game!</h1>
                <a class="btn btn-lg btn-primary mb-4" href="/competition/participate">Participate</a>
            </div>
        </div>
       


        <h1 class="text-center">Winners</h1>
        <p class="lead text-center">These are the winners of previous contests</p>
        <div class="card mb-4">
            <div class="card-body">
                    @foreach($winners as $winner)
                        <h6>Winner contest {{$winner->period_id}}: {{$winner->user->name}}</h6>
                    @endforeach
            </div>
        </div>
            <h1 class="text-center">Drawings</h1>
            <p class="lead text-center">Vote on your favorite one!</p>
            <div class="card">
                <div class="card-body">
                   <div class="col-sm-12">

                
                    @if($participations)
                        @foreach($participations as $participation)
                            <div class="part">
                            <div class="card">
                            <div class="card-body">
                             <img class="part-pic" src="uploads/{{$participation->file}}" alt="image">
                                <p>{{$participation->user->name}} |  Votes: {{$participation->likes->count()}}</p>
                                
                            </div>
                            <div class="card-footer">
                                 {!! Form::open(array('method'=>'post','action'=>'ParticipationController@like')) !!}
                                    {!! Form::hidden('id', $participation->id, array('id' => $participation->id)) !!}
                                    
                                        @if($participation->user_id != Auth::user()->id && !Auth::user()->has_voted)
                                            {!! Form::submit('Vote',array('class'=>'btn btn-primary like')) !!}
                                        @endif
                               
                               

                                 {!! Form::close() !!}
                            </div>
                            </div>
                               
                            
                            </div>
                         
                           
                        @endforeach
                    @endif
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
@endsection
