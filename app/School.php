<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'school_info';
    public $timestamps = false;
    protected $fillable = ['schoolname', 'schooltype', 'location', 'schoollogo'];
    protected $primaryKey = 'coachid';
}
