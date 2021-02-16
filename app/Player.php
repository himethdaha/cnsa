<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public $timestamps = false;
    protected $table = 'player_info';
    protected $fillable = ['firstname', 'lastname', 'birthdate', 'gender', 'height', 'weight', 'school_id', 'playerpic'];
    protected $primaryKey = 'playerid';
}
