<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamManager extends Model
{
  public $timestamps = false;
  protected $table = 'team_manager_info';
  protected $fillable = ['firstname', 'lastname', 'birthdate', 'user_code'];
  protected $primaryKey = 'managerid';
}
