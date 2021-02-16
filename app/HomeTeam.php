<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeTeam extends Model
{
  protected $table = 'hometeam';
  protected $fillable = ['hometeamid','team_id'];
  protected $primaryKey = 'hometeamid';
}
