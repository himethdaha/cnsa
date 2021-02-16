<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('player_info', function (Blueprint $table) {
        $table->increments('playerid')->index();
        $table->string('firstname');
        $table->string('lastname');
        $table->date('birthdate');
        $table->string('gender');
        $table->integer('height');
        $table->integer('weight');
        $table->integer('school_id')->references('schoolid')->on('school_info');
        $table->binary('playerpic');

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_info');
    }
}
