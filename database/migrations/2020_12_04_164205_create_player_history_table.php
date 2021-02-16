<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('player_history', function (Blueprint $table) {
        $table->increments('playerhistoryid')->index();
        $table->integer('player_id')->references('playerid')->on('player_info');
        $table->integer('team_id')->references('teamid')->on('team_info');
        $table->date('yearjoined');
        $table->date('yearended');
        $table->integer('position_code')->references('positioncode')->on('positions');

    });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_history');
    }
}
