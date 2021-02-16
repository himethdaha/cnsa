<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamePlayerStatsController extends Controller
{
    public function create()
    {
        return view('gameplayerstats.create');
    }

    public function update()
    {
        return view('gameplayerstats.update');
    }

}
