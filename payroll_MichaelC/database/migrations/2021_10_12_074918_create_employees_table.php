<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empAdd', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->integer('age');
            $table->string('sex');
            $table->timestamps();
        });
        Schema::create('empAttendance', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('empAdd_id');
            $table->foreign('empAdd_id')->references('id')->on('empAdd')->onDelete('cascade');
            $table->string('datefrom');
            $table->string('dateto');
            $table->integer('rate');
            $table->integer('absent');
            $table->integer('workdays');
            $table->integer('initialamount');
            $table->timestamps();
        });
        Schema::create('empRecords', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('empAttendance_id');
            $table->foreign('empAttendance_id')->references('id')->on('empAttendance')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
