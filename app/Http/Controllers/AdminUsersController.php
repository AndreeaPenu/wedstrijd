<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class AdminUsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if(trim($request->password) == ''){
            $input = $request->except('password');
        } else {
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
        }

       User::create($input);
       
       return redirect('/admin/users');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::pluck('name','id')->all();

        return view('admin.users.edit', compact('user','roles'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if(trim($request->password) == ''){
            $input = $request->except('password');
        } else {
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
        }

        $user->update($input);
        return redirect('/admin/users');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        Session::flash('deleted_user', 'The user has been deleted');

        return redirect('/admin/users');
    }
}
