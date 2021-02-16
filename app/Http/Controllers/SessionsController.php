<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use app\User;
use DB;

class SessionsController extends Controller
{

  public function __construct()
  {
    $this->middleware('guest')->except('logout');
  }

  public function create()
  {
    return view('sessions.create');
  }


  public function store()
  {
    // Attempt to authenticate the user.
    if(! auth()-> attempt(request(['usercode', 'password']))){
        return back()->withErrors([
          'message' => 'Please check your credentials and try again.'
        ]);
      }
      if(auth()->user()->role =="itcrew"){
        return redirect("/user/it");
      }elseif(auth()->user()->role =="recruiters"){
        return redirect("/user/recruiter");
      }elseif(auth()->user()->role =="staff"){
        return redirect("/user/staff");
      }elseif(auth()->user()->role =="manager"){
        return redirect("/user/manager");
      }else{
        return redirect("/index");
      }
    // If not, redirect to home page.

  }
  // public function index() {
  //   return view('itcrew.index');
  // }

  use AuthenticatesUsers;

  /**
   * Where to redirect users after login.
   *
   * @var string
   */
   public function redirectTo() {
 $role = Auth::users()->role;
 switch ($role) {
   case 'itcrew':
     return '/itcrew/index';
     break;
   case 'recruiters':
     return '/recruiters/index';
     break;

   default:
     return '/';
   break;
 }
}


  public function destroy()
  {
    auth()->logout();
    return redirect("/login");
  }



}
