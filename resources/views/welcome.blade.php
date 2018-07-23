@extends('layouts.app')
<body class="home">
@section('content')

        <div class="container text-center mt-15p">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <h1>Win the new Super Mario Bros!</h1>
                <div class="h1-p">Just upload a nice picture and wait for the votes to come.</p>
                <a href="{{ url('/home') }}" class="btn btn-lg btn-primary">Play now</a>
            </div>
        </div>
    </div>
</body>

@endsection