<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\str;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('pages.admin.users.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        $users = User::all();
        return view('pages.admin.users.create', compact('users'));
    }

    public function store(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'roles' => $request->roles,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('users');
    }

    public function edit($id)
    {
      //  $users = User::findOrFail($id);

        //return view('pages.admin.users.edit', compact('users'));
        return view('pages.admin.users.edit', ['users' => User::findOrFail($id)]);
    }
    
    public function update($id ,UserRequest $request)
    {
        $data = $request->all();
        $users = User::findOrFail($id);

        $users->update($data);
        return redirect()->route('users');
    }
}
