<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidentlog extends Model
{
    public $timestamps = false;
    protected $table = 'recruiting_incident_log';
    protected $fillable = ['incident_code', 'date', 'player_id', 'staff_id'];
    protected $primaryKey = 'incidentlogid';
}
