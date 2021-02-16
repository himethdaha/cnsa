<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use DB;

class TeamsController extends Controller
{
  public function create()

  {
    return view('teams.create');
  }

  public function update()
  {
    return view('teams.update');
  }
  public function show()
  {
     $teams = Team::all();
     return view('teams.show', compact('teams'));
  }
  public function index()
  {
      $teama = Team::all()->toArray();
      return view('teams.index', compact('teama'));
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'teamname'     =>   'required',
      'datecreated'  =>   'required'

    ]);

    $team = new Team([
      'teamname'     =>   $request->get('teamname'),
      'datecreated'      =>   $request->get('datecreated'),
      'teamlogo'     =>   $request->get('teamlogo')
    ]);

    $team->save();
    return redirect()->route('teams.create')->with('success',
    'Data Added');
  }
}
