<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AwayTeam;
class AwayTeamController extends Controller
{
  public function create()
  {
      return view('awayteam.create');
  }

  public function store(Request $request)
   {
    $this->validate($request, [

       'awayteam_id'              => 'required',
       'team_id'                  => 'required',
     ]);


    $awayteam = new AwayTeam([

        'awayteam_id'              => $request->get('awayteam_id'),
        'team_id'                  => $request->get('team_id')

      ]);

      $awayteam ->save();
      return redirect()->route('awayteam.create')->with('success', 'Data Added');
     }

  public function show()
  {
    $awayteams = DB::table('awayteams')
       ->join('team_info', 'team_info.teamid', '=', 'hometeam.team_id')
       return view('awayteam.show', compact('awayteams'));
  }
