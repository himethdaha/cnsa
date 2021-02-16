<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitingIncidentLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('recruiting_incident_log', function (Blueprint $table) {
        $table->increments('incidentlogid')->index();
        $table->integer('incident_code')->references('incidentcode')->on('incident_info');
        $table->date('date');
        $table->integer('player_id')->references('playerid')->on('player_info');
        $table->integer('staff_id')->references('staffid')->on('cnsa_staff_info');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recruiting_incident_log');
    }
}
