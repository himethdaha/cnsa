<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TeamManager;
use DB;

class TeamManagerController extends Controller
{
  public function create()
  {
      return view('manager.create');
  }

  public function update()
  {
      return view('manager.update');
  }

  public function store(Request $request)
   {
    $this->validate($request, [

       'firstname'                    => 'required',
       'lastname'                     => 'required',
       'birthdate'                    => 'required',
       'user_code'                    => 'required'

    ]);

    $teammanager = new TeamManager([

         'firstname'                  => $request->get('firstname'),
         'lastname'                   => $request->get('lastname'),
         'birthdate'                  => $request->get('birthdate'),
         'user_code'                  => $request->get('user_code'),


    ]);
    $teammanager ->save();
    
}

public function show()
{
  $teammanagers = TeamManager::all()->toArray();
  return view('manager.show', compact('teammanagers'));
}
}
