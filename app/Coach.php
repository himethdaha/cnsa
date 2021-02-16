<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
  public $timestamps = false;
  protected $table = 'coach_info';
  protected $fillable = ['firstname', 'lastname', 'birthdate', 'coachpic'];
  protected $primaryKey = 'coachid';
}
