@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1 class="text-center">Edit Period</h1>
            <div class="card">
        
                <div class="card-body text-center">
                    {!! Form::model($period,['method'=>'PATCH','action'=> ['AdminPeriodsController@update', $period->id]]) !!}
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
                            {!! Form::label('begin', 'Begin') !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::date('begin', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4">
                            {!! Form::label('end', 'End') !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::date('end', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    
                    <div class="to-right">
                        <div class="form-group">
                        {!! Form::submit('Update period', ['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
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