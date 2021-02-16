<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'team_info';
    public $timestamps = false;
    protected $fillable = ['teamname', 'datecreated', 'teamlogo'];
    protected $primaryKey = 'teamid';
}
