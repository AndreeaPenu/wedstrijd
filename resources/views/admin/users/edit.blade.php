@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1 class="text-center">Edit User</h1>
            <div class="card">
             
                <div class="card-body text-center">
                    {!! Form::model($user,['method'=>'PATCH','action'=> ['AdminUsersController@update', $user->id],'files'=>true]) !!}
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group row">
                        <div class="col-md-4">
                            {!! Form::label('name', 'Name') !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4">
                            {!! Form::label('address', 'Address') !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('address', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4">
                            {!! Form::label('number', 'Number') !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::number('number', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4">
                            {!! Form::label('city', 'City') !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('city', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4">
                            {!! Form::label('post_code', 'Postal code') !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('post_code', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-md-4">
                            {!! Form::label('email', 'Email') !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::email('email', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4">
                            {!! Form::label('role_id', 'Role') !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4">
                            {!! Form::label('password', 'Password') !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::password('password', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="to-right">
                        <div class="form-group">
                        {!! Form::submit('Update profile', ['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}

                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}
                <div class="form-group">
                    {!! Form::submit('Delete user', ['class'=>'btn btn-danger']) !!}
                </div>
                </div>
               
            {!! Form::close() !!}

                </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
      


@endsection