<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStadiumInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('stadium_info', function (Blueprint $table) {
        $table->increments('stadiumid')->index();
        $table->string('stadiumname');
        $table->string('location');
        $table->integer('team_id')->references('teamid')->on('team_info');
        $table->integer('maximumcapacity');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stadium_info');
    }
}
