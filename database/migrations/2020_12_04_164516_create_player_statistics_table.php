<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('player_statistics', function (Blueprint $table) {
        $table->increments('playerstatsid')->index();
        $table->integer('player_id')->references('playerid')->on('player_info');
        $table->integer('position_code')->references('positioncode')->on('positions');
        $table->integer('goalsattempted');
        $table->integer('goalsmade');
        $table->integer('saves');
        $table->integer('assists');
        $table->integer('yellowcards');
        $table->integer('redcards');
        $table->integer('injury_id')->references('injuryid')->on('injury_log');

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_statistics');
    }
}
