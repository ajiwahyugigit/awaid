<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\str;

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
    
}
