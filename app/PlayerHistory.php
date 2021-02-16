<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerHistory extends Model
{
  public $timestamps = false;
  protected $table = 'player_history';
  protected $fillable = ['player_id','team_id','yearjoined', 'position_code'];
  protected $primaryKey = 'playerhistoryid';
}
