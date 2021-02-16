<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use DB;
class StaffController extends Controller
{
    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
      $this->validate($request, [
          'firstname'                    =>   'required',
          'lastname'                     =>   'required',
          'position_code'                =>   'required',
          'yearentered'                  =>   'required',
          'user_code'                    =>   'required',
          'birthdate'                    =>   'required'

      ]);
      $staff = new Staff([
        'firstname'                    =>   $request->get('firstname'),
        'lastname'                     =>   $request->get('lastname'),
        'position_code'                =>   $request->get('position_code'),
        'yearentered'                  =>   $request->get('yearentered'),
        'user_code'                    =>   $request->get('user_code'),
        'birthdate'                    =>   $request->get('birthdate')
      ]);
      $staff->save();
      return redirect()->route('staff.create')->with('success',
      'Data Added');
    }

    public function show()
      {
        $staffs = Coach::all()->toArray();
         return view('staff.show', compact('staffs'));
       }
    public function update()
    {
        return view('staff.update');
    }

}
