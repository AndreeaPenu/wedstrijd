<html>
<head>
</head>
<body>
    <div class="card">
    <div class="card-header">
        Users
    </div>
    <div class="card-body">
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
        <th>Created at</th>
        <th>Updated at</th>
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
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            <td><a href="{{ url('/') }}/admin/users/{{ $user->id }}/edit" class="btn btn-secondary">Edit</a></td>
        </tr>
        @endforeach
    @endif
    </table>
    </div>
  

    
</div>
    
</div>

</body>
</html>

