<?php

namespace App\Http\Controllers\recruiters;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
  public function __construct() {
  $this->middleware('auth');
}
public function index() {
  return view('recruiters.index');
}
}
