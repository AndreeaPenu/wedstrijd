@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Homepage <a href="/competition/participate">Neem deel!</a></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Winners</h1>
                    <h6>Winner period 1: {{$winner_name}}</h6>
                    <h6>Winner period 2: </h6>
                    <h6>Winner period 3: </h6>
                    <h6>Winner period 4: </h6>

                    <h1>All participations</h1>
                    <ul>
                    @if($participations)
                        @foreach($participations as $participation)
                            <li>  
                                <img class="part-pic" src="uploads/{{$participation->file}}" alt="image" width="50" height="50">
                                <p>{{$participation->user->name}} |  Votes: {{$participation->likes->count()}}</p>

                                 {!! Form::open(array('method'=>'post','action'=>'ParticipationController@like')) !!}
                                    {!! Form::hidden('id', $participation->id, array('id' => $participation->id)) !!}
                                    @if($participation->user_id != Auth::user()->id && !Auth::user()->has_voted)
                                        {!! Form::submit('Vote',array('class'=>'btn btn-primary like')) !!}
                                    @endif
                                 {!! Form::close() !!}
                            </li>
                        @endforeach
                    @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
