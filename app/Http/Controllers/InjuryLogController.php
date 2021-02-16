<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Injurylog;
use DB;

class InjuryLogController extends Controller
{
  public function show()
  {
      $injurylogs = Injurylog::all()->toArray();
      return view('injurylog.show', compact('injurylogs'));
  }
    public function create()
    {
        return view('injurylog.create');
    }
    public function update(Request $request, $injuryid)
    {
      $this->validate($request, [
          'player_id'           =>   'required',
          'injurydescription'   =>   'required',
          'date'                =>   'required'
      ]);
      $injurylog = Injurylog::find($injuryid);
      $injurylog->player_id = $request->get('player_id');
      $injurylog->injurydescription = $request->get('injurydescription');
      $injurylog->date = $request->get('date');
      $injurylog->save();
      return redirect()->route('injurylog.show', compact('injurylog', 'injuryid'))->with('success',
      'Data Updated');
    }

    public function edit($injuryid)
    {
      $injurylog = Injurylog::find($injuryid);
      return view('injurylog.edit', compact('injurylog', 'injuryid'));
    }
    // public function show($id)
    //   {
    //      $injurylog = DB::table('injury_log')
    //      ->join('player_info', 'player_info.playerid', '=', 'injury_log.player_id')
    //      ->select('injury_log.player_id', 'player_info.firstname', 'player_info.lastname', 'injury_log.injurydescription', 'injury_log.date')
    //      ->get();
    //
    //      return view('injurylog.show', compact('injurylog'));
    //   }
    public function store(Request $request)
    {
      $this->validate($request, [
          'player_id'           =>   'required',
          'injurydescription'   =>   'required',
          'date'                =>   'required'
      ]);
      $injurylog = new Injurylog([
        'player_id'           =>   $request->get('player_id'),
        'injurydescription'   =>   $request->get('injurydescription'),
        'date'                =>   $request->get('date')
      ]);
      $injurylog->save();
      return redirect()->route('injurylog.show', compact('injurylog', 'injuryid'))->with('success',
      'Data Added');
    }
}
