@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
<div class="col-md-8">
<h1 class="text-center">Periods</h1>
    <div class="card">
    <div class="card-body">
<table style="width:100%" class="w3-table w3-striped">
    <tr>
        <th>Begin</th> 
        <th>End</th>
        <th></th>
    </tr>
    @if($periods)
        @foreach($periods as $period)
        <tr>
            <td>{{$period->begin}}</td>
            <td>{{$period->end}}</td>
            <td><a href="{{ url('/') }}/admin/periods/{{ $period->id }}/edit" class="btn btn-secondary">Edit</a></td>
        </tr>
        @endforeach
    @endif
    </table>
    </div>
  

    
</div>
    
</div>
</div>
</div>
@endsection

