<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use DB;
class SchoolsController extends Controller
{
  public function create()

  {
    return view('schools.create');
  }

  public function store(Request $request)
   {
    $this->validate($request, [

       'schoolname'         => 'required',
       'schooltype'         => 'required',
       'location'           => 'required'

    ]);

    $school = new School([

         'schoolname'         => $request->get('schoolname'),
         'schooltype'         => $request->get('schooltype'),
         'location'          => $request->get('location'),
         'schoollogo'          => $request->get('schoollogo'),

    ]);

    $school ->save();
    return redirect()->route('school.create')->with('success', 'Data Added');
   }

  public function show()
  {
    $schools = School::all();
    return view('schools.show', compact('schools'));
  }
}
