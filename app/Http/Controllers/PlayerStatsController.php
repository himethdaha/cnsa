<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerStatsController extends Controller
{
    public function create()
    {
        return view('playerstats.create');
    }

    public function update()
    {
        return view('playerstats.update');
    }

}
