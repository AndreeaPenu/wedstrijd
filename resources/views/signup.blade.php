@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center">Nintendo Account</h1>
            <div class="card">

                <div class="card-body">
                  

                        <p class="text-center">Sign in to your Nintendo Account </br>
                        or create a new account.</p>

                        
                        <div class="form-group row">
                            <div class="col-md-6 text-center">
                                <p><strong>For existing users</strong> </p>
                                <a class="btn btn-lg btn-primary mb-4" href="{{ route('login') }}">Sign in</a>
                            </div>
                            <div class="col-md-6 text-center">
                                <p><strong>Don't have an account?</strong> </p>
                                <a class="btn btn-lg btn-primary mb-4" href="{{ route('register') }}">Create a Nintendo Account</a>
                            </div>
                        </div>

       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
