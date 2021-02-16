<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameInfo extends Model
{
  public $timestamps = false;
  protected $table = 'game_info';
  protected $fillable = ['hometeamid', 'awayteamid','attendance','date','duration'];
  protected $primaryKey = 'gameid';
}
