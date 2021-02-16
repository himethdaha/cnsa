<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoachHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('coach_history', function (Blueprint $table) {
      $table->increments('coachhistoryid')->index();
      $table->integer('coach_id')->references('coachid')->on('coach_info');
      $table->date('yearjoined');
      $table->date('yearend');
      $table->integer('team_id')->references('teamid')->on('team_info');
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
          Schema::dropIfExists('coach_history');
    }
}
