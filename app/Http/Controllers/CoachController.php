<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coach;
use DB;
class CoachController extends Controller
{
    public function create()
    {
        return view('coach.create');
    }

    public function update()
    {
        return view('coach.update');
    }

    public function store(Request $request)
     {
      $this->validate($request, [

         'firstname'                    => 'required',
         'lastname'                     => 'required',
         'birthdate'                    => 'required',
         'coachpic'                     => 'required'

      ]);

      $coach = new Coach([

           'firstname'                  => $request->get('firstname'),
           'lastname'                   => $request->get('lastname'),
           'birthdate'                  => $request->get('birthdate'),
           'coachpic'                   => $request->get('coachpic'),


      ]);

      $coach ->save();
      return redirect()->route('coach.create')->with('success', 'Data Added');
  }


    public function show()
    {
      $coaches = Coach::all()->toArray();
      return view('coach.show', compact('coaches'));
    }
}
