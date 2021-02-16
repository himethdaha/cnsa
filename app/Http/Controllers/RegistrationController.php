<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
  public function create()
 {
   $this->validate($request, [
          'password' => 'required|confirmed',
          'role'    => 'required',
          'isActive'  => 'required'
        ]);

    $user = User::create
   return view('registration.create');
 }

 public function store(RegistrationForm $form)
 {
     $form->persist();

     session()->flash('message', 'Thanks so much for signing up!');
     return redirect()->home();
   }
}
