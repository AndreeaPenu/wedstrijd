@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
        <a class="btn btn-lg btn-primary mb-4" href="/competition/participate">Participate</a>
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
        @endif

        <h1 class="text-center">Winners</h1>
        <div class="card mb-4">
            <div class="card-body">
                    @foreach($winners as $key => $winner)
                        <h6>Winner period {{$key+1}}: {{$users[$winners[$key]->id]->name}}</h6>
                    @endforeach
            </div>
        </div>
            <h1 class="text-center">All participations</h1>
            <div class="card">
                <div class="card-body">
                   <div class="col-sm-12">

                
                    @if($participations)
                        @foreach($participations as $participation)
                            <div class="part">
                                <img class="part-pic" src="uploads/{{$participation->file}}" alt="image">
                                <p>{{$participation->user->name}} |  Votes: {{$participation->likes->count()}}</p>

                                 {!! Form::open(array('method'=>'post','action'=>'ParticipationController@like')) !!}
                                    {!! Form::hidden('id', $participation->id, array('id' => $participation->id)) !!}
                                    @if($participation->user_id != Auth::user()->id && !Auth::user()->has_voted)
                                        {!! Form::submit('Vote',array('class'=>'btn btn-primary like')) !!}
                                    @endif
                                 {!! Form::close() !!}
                            </div>
                         
                           
                        @endforeach
                    @endif
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
@endsection
