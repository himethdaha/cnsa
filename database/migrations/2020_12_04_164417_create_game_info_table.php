<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('game_info', function (Blueprint $table) {
        $table->increments('gameid')->index();
        $table->integer('hometeamid')->references('hometeamid')->on('home_team');
        $table->integer('awayteamid')->references('awayteamid')->on('away_team');
        $table->integer('attendance');
        $table->date('date');
        $table->time('duration');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('game_info');
    }
}
