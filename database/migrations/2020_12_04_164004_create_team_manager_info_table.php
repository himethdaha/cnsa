<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamManagerInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('team_manager_info', function (Blueprint $table) {
          $table->increments('managerid')->index();
          $table->string('firstname');
          $table->string('lastname');
          $table->date('birthdate');
          $table->integer('user_code')->references('usercode')->on('users');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_manager_info');
    }
}
