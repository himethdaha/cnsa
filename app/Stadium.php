<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
  protected $table = 'stadium_info';
  public $timestamps = false;
  protected $fillable = ['stadiumname', 'location', 'team_id', 'maximumcapacity'];
  protected $primaryKey = 'stadiumid';
}
