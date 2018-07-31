@extends('layouts.app')
<body class="home">
@section('content')

        <div class="overlay"></div>
        <div class="container text-center mt-15p">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <h1>Win the new Super Mario Bros game !</h1>
                <div class="h1-p">Want to win? Of course you do! Grab your pencils and make a nice drawing of Mario and his friends.
                     </br>Make sure you vote on your favorite drawing, because the picture with the most votes wins!
                    Good-a luck my friend!</p>
                <a href="{{ url('/home') }}" class="btn btn-lg btn-primary">Join Now</a>
            </div>
        </div>
    </div>
</body>

@endsection