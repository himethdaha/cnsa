<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incidentlog;
use DB;

class IncidentLogController extends Controller
{
  public function show()
  {
      $incidentlogs = Incidentlog::all()->toArray();
      return view('incidentlog.show', compact('incidentlogs'));
  }
    public function create()
    {
        return view('incidentlog.create');
    }
    public function update(Request $request, $incidentlogid)
    {
      $this->validate($request, [
          'incident_code'  =>   'required',
          'date'           =>   'required',
          'player_id'      =>   'required',
          'staff_id'       =>   'required'
      ]);
      $incidentlog = Incidentlog::find($incidentlogid);
      $incidentlog->incident_code = $request->get('incident_code');
      $incidentlog->date = $request->get('date');
      $incidentlog->player_id = $request->get('player_id');
      $incidentlog->staff_id = $request->get('staff_id');
      $incidentlog->save();
      return redirect()->route('incidentlog.show', compact('incidentlog', 'incidentlogid'))->with('success',
      'Data Updated');
    }

    public function edit($incidentlogid)
    {
      $incidentlog = Incidentlog::find($incidentlogid);
      return view('incidentlog.edit', compact('incidentlog', 'incidentlogid'));
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
        'incident_code'  =>   'required',
        'date'           =>   'required',
        'player_id'      =>   'required',
        'staff_id'       =>   'required'
      ]);
      $incidentlog = new Incidentlog([
        'incident_code'      =>   $request->get('incident_code'),
        'date'               =>   $request->get('date'),
        'player_id'          =>   $request->get('player_id'),
        'staff_id'           =>   $request->get('staff_id')
      ]);
      $incidentlog->save();
      return redirect()->route('incidentlog.show', compact('incidentlog', 'incidentlogid'))->with('success',
      'Data Added');
    }
}
