<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Chalengge;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all()->count();
        $chalengges = Chalengge::all()->count();
        $categories = Category::all()->count();
        return view('dashboard.index', compact('users', 'chalengges', 'categories'));
    }
}
