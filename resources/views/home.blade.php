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
                    <ul>
                        @foreach($participations as $participation)
                            <li>  
                                <img class="part-pic" src="uploads/{{$participation->file}}" alt="image" width="50" height="50">
                                <p>has 0 likes <a href="#">like</a></p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
