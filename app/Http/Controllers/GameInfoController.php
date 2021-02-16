<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\GameInfo;
use DB;
class GameInfoController extends Controller
{
  public function create()
  {
    return view('gameinfo.create');
  }

  public function show($id)
  {
    $gameinfo = DB::table('game_info')
       ->join('home_team', 'home_team.hometeamid', '=', 'game_info.hometeamid')
        ->select('game_info.gameid', 'home_team.team_id', 'game_info.attendance', 'game_info.date', 'game_info.duration')
       ->get();

       $awayteam = DB::table('away_team')
          ->select('away_team.team_id')
          ->get();

    return view('gameinfo.show', compact('gameinfo'), compact('awayteam'));
  }

  public function store(Request $request)
   {
    $this->validate($request, [

       'hometeamid'         => 'required',
       'awayteamid'         => 'required',
       'attendance'          => 'required',
       'date'                => 'required',
       'duration'            => 'required'
    ]);

    $gameinfo = new GameInfo([

         'hometeamid'         => $request->get('hometeamid'),
         'awayteamid'         => $request->get('awayteamid'),
         'attendance'          => $request->get('attendance'),
         'date'                => $request->get('date'),
         'duration'            => $request->get('duration')

    ]);

    $gameinfo ->save();
    return redirect()->route('gameinfo.create')->with('success', 'Data Added');
   }
}
