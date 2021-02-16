<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlayerHistory;
use DB;

class PlayersHistoryController extends Controller
{

  public function show()
  {
    $playerhistorys = PlayerHistory::all()->toArray();
    return view('playerhistory.show', compact('playerhistorys'));
  }

  public function create()
  {
      return view('playerhistory.create');
  }

  public function update(Request $request, $playerhistoryid)
  {
    $this->validate($request, [
        'player_id'                      =>   'required',
        'team_id'                        =>   'required',
        'yearjoined'                     =>   'required',
        'position_code'                  =>   'required',

    ]);
    $playerhistory = PlayerHistory::find($playerhistoryid);
    $playerhistory->player_id = $request->get('player_id');
    $playerhistory->team_id = $request->get('team_id');
    $playerhistory->yearjoined = $request->get('yearjoined');
    $playerhistory->position_code = $request->get('position_code');
    return redirect()->route('playerhistory.create', compact('playerhistory', 'playerhistoryid'))->with('success',
    'Data Updated');
  }
  public function edit($playerhistoryid)
  {
    $playerhistory = PlayerHistory::find($playerhistoryid);
    return view('playerhistory.edit', compact('playerhistory', 'playerhistoryid'));
  }

  public function store(Request $request)
  {
    $this->validate($request, [
          'player_id'     => 'required',
          'team_id'       => 'required',
          'yearjoined'    => 'required',
          'position_code' => 'required'

        ]);
        $playerhistory = new PlayerHistory([
            'player_id'           =>  $request->get('player_id'),
            'team_id'             =>  $request->get('team_id'),
            'yearjoined'          =>  $request->get('yearjoined'),
            'position_code'       =>  $request->get('position_code')

        ]);
        $playerhistory->save();
        return redirect()->route('playerhistory.show', compact('playerhistory', 'playerhistoryid'))->with('success', 'Data Added');
  }

}
