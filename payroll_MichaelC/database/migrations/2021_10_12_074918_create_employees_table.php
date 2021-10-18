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
            $table->increments('id')->from(101);
            $table->string('name');
            $table->string('address');
            $table->integer('age');
            $table->string('sex');
            $table->timestamps();
        });
        Schema::create('empAttendance', function (Blueprint $table) {
            $table->increments('id')->from(2001);
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
        Schema::create('empDeductionSalary', function (Blueprint $table) {
            $table->increments('id')->from(30001);
            $table->unsignedInteger('empattendance_id');
            $table->foreign('empattendance_id')->references('id')->on('empAttendance')->onDelete('cascade');
            $table->string('typeDeduction');
            $table->integer('deductionAmount');
            $table->timestamps();
        });
        Schema::create('TotalAmount', function (Blueprint $table) {
            $table->increments('id')->from(400001);
            $table->unsignedInteger('empdeductionSalary_ID');
            $table->foreign('empdeductionSalary_ID')->references('id')->on('empDeductionSalary')->onDelete('cascade');
            $table->integer('TotalSalary');
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
