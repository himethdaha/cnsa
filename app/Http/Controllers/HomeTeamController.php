<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeTeam;
class HomeTeamController extends Controller
{
  public function create()
  {
      return view('hometeam.create');
  }

  public function store(Request $request)
   {
    $this->validate($request, [

       'hometeam_id'              => 'required',
       'team_id'                  => 'required',
     ]);


    $hometeam = new HomeTeam([

        'hometeam_id'              => $request->get('hometeam_id'),
        'team_id'                  => $request->get('team_id')

      ]);

      $hometeam ->save();
      return redirect()->route('hometeam.create')->with('success', 'Data Added');
     }

  public function show()
  {
    $hometeams = DB::table('hometeam')
       ->join('team_info', 'team_info.teamid', '=', 'hometeam.team_id')
       return view('hometeam.show', compact('hometeams'));
  }
