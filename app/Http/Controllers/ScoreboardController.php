<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ScoreboardController extends Controller
{
    public function index()
    {
        return view('scoreboard.index');
    }

    public function fetchScores()
    {
        $scores = User::orderBy('nilai', 'DESC')->paginate(10);
        return response()->json($scores);
    }
}
