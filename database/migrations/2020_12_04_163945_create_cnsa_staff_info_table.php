<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCnsaStaffInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('cnsa_staff_info', function (Blueprint $table) {
        $table->increments('staffid')->index();
        $table->string('firstname');
        $table->string('lastname');
        $table->integer('position_code')->references('positioncode')->on('positions');
        $table->date('yearentered');
        $table->date('yearend');
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
        Schema::dropIfExists('cnsa_staff_info');
    }
}
