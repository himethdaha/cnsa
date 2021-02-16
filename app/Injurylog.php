<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Injurylog extends Model
{
    public $timestamps = false;
    protected $table = 'injury_log';
    protected $fillable = ['player_id', 'injurydescription', 'date'];
    protected $primaryKey = 'injuryid';
}
