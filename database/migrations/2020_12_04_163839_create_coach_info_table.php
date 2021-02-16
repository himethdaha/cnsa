<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoachInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('coach_info', function (Blueprint $table) {
        $table->increments('coachid')->index();
        $table->string('firstname');
        $table->string('lastname');
        $table->date('birthdate');
        $table->binary('coachpic');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('coach_info');
    }
}
