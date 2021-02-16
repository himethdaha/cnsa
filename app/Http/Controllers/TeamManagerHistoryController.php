<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamManagerHistoryController extends Controller
{
    public function create()
    {
        return view('manager.history.create');
    }

    public function update()
    {
        return view('manager.history.update');
    }

}
