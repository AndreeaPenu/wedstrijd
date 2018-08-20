@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
<div class="col-md-8">
<h1 class="text-center">Users</h1>
    <div class="card">
    <div class="card-body">
    <a href="{{ url('/') }}/export" class="btn btn-primary">Export</a>
<table style="width:100%" class="w3-table w3-striped">
    <tr>
        <th>ID</th>
        <th>Name</th> 
        <th>Address</th>
        <th>Number</th>
        <th>City</th>
        <th>Postal code</th>
        <th>Email</th>
        <th>Role</th>
        <th></th>
    </tr>
    @if($users)
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->address}}</td>
            <td>{{$user->number}}</td>
            <td>{{$user->city}}</td>
            <td>{{$user->post_code}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role->name}}</td>
            <td><a href="{{ url('/') }}/admin/users/{{ $user->id }}/edit" class="btn btn-secondary">Edit</a></td>
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

