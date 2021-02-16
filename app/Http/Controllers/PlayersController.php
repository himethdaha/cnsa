<?php

namespace App\Http\Controllers;
use App\Player;
use DB;


use Illuminate\Http\Request;

class PlayersController extends Controller
{
  public function index()
  {
      return view('player.index', compact('players'));
  }
  public function show()
  {
      $players = Player::all()->toArray();
      return view('player.show', compact('players'));
  }
    public function create()
    {
        return view('player.create');
    }
    public function update(Request $request, $playerid)
    {
      $this->validate($request, [
        'firstname'     =>   'required',
        'lastname'      =>   'required',
        'height'        =>   'required',
        'weight'        =>   'required',
        'school_id'     =>   'required'
      ]);
      $player = Player::find($playerid);
      $player->firstname = $request->get('firstname');
      $player->lastname = $request->get('lastname');
      $player->height = $request->get('height');
      $player->weight = $request->get('weight');
      $player->school_id = $request->get('school_id');
      $player->save();
      return redirect()->route('player.edit', compact('player', 'playerid'))->with('success',
      'Data Updated');
    }

    public function edit($playerid)
    {
      $player = Player::find($playerid);
      return view('player.edit', compact('player', 'playerid'));
    }
    // public function show($id)
    //   {
    //      $injurylogs = DB::table('injury_log')
    //      ->join('player_info', 'player_info.playerid', '=', 'injury_log.player_id')
    //      ->select('injury_log.player_id', 'player_info.firstname', 'player_info.lastname', 'injury_log.injurydescription', 'injury_log.date')
    //      ->get();
    //
    //      return view('injurylog.show', compact('injurylogs'));
    //   }
    public function store(Request $request)
    {
      $this->validate($request, [
        'firstname'     =>   'required',
        'lastname'      =>   'required',
        'height'        =>   'required',
        'weight'        =>   'required',
        'school_id'     =>   'required'

      ]);

      $player = new Player([
        'firstname'     =>   $request->get('firstname'),
        'lastname'      =>   $request->get('lastname'),
        'birthdate'     =>   $request->get('birthdate'),
        'gender'        =>   $request->get('gender'),
        'height'        =>   $request->get('height'),
        'weight'        =>   $request->get('weight'),
        'school_id'     =>   $request->get('school_id'),
        'playerpic'     =>   $request->get('playerpic')
      ]);

      $player->save();
      return redirect()->route('player.create')->with('success',
      'Data Added');
    }
}
