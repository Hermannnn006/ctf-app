<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Tables\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index',[
            'users' => Users::build(),
        ]);
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
}
