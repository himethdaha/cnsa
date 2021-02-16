<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInjuryLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('injury_log', function (Blueprint $table) {
          $table->increments('injuryid')->index();
          $table->integer('player_id')->references('playerid')->on('player_info');
          $table->string('injurydescription');
          $table->date('date');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('injury_log');
    }
}
