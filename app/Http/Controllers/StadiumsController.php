<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stadium;
use DB;
class StadiumsController extends Controller
{
    public function create()
    {
        return view('stadiums.create');
    }

    public function store(Request $request)
     {
      $this->validate($request, [

         'stadiumname'               => 'required',
         'location'                  => 'required',
         'team_id'                   => 'required',
         'maximumcapacity'           => 'required'

      ]);

      $stadium = new Stadium([

           'stadiumname'              => $request->get('stadiumname'),
           'location'                 => $request->get('location'),
           'team_id'                  => $request->get('team_id'),
           'maximumcapacity'          => $request->get('maximumcapacity'),


      ]);

      $stadium ->save();
      return redirect()->route('stadiums.create')->with('success', 'Data Added');

    }

    public function show()
    {
      $stadiums = Stadium::all();
      return view('stadiums.show', compact('stadiums'));
    }

}
