<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoachHistoryController extends Controller
{
  public function create()
  {
      return view('coach.history.create');
  }

  public function update()
  {
      return view('coach.history.update');
  }

}
