<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
  public $timestamps = false;
  protected $table = 'cnsa_staff_info';
  protected $fillable = ['firstname', 'lastname', 'position_code', 'yearentered', 'yearend', 'user_code', 'birthdate'];
  protected $primaryKey = 'staffid';
}
