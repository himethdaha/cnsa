<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamePlayerStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('game_player_statistics', function (Blueprint $table) {
        $table->increments('statsid')->index();
        $table->integer('gameid');
        $table->integer('player_stats_id')->references('playerstatsid')->on('player_statistics');


    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_player_statistics');
    }
}
