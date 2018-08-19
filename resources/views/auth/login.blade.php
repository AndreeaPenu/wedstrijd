@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center">Nintendo Account</h1>
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right sr-only">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="Email address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right sr-only">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Sign in') }}
                                </button>
                            </div>
                        </div>


                    </form>

                                            <div class="form-group row mb-0">
                            <div class="col-md-12">
                                
                                <div class="social text-center">
                                    <p>Sign in with</p>
                                   <a href="{{ url('/auth/facebook' )}}"> <p class="fb">Facebook </p></a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-0 text-center mt-4">
                            <p>Don't have an account?</p>  
                            <a class="btn-outline mb-4" href="{{ route('register') }}">Create a Nintendo Account</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
