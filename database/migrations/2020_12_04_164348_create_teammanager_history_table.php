<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeammanagerHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('teammanager_history', function (Blueprint $table) {
       $table->increments('managerhistoryid')->index();
       $table->integer('manager_id')->references('managerid')->on('team_manager_info');
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
        Schema::dropIfExists('teammanager_history');
    }
}
