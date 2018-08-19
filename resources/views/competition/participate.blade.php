@extends('layouts.app')

@section('content')

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center">Participate now!</h1>
            <div class="card">
                
                <div class="card-body">
                    <h1>File upload</h1>


                    <form action="{{ URL::to('competition/upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="file" class="col-sm-4 col-form-label text-md-right">{{ __('Select an image to upload') }}</label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control" name="file">
                                <input type="submit" class="btn btn-primary btn-lg mt-4" value="Upload" name="submit">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


