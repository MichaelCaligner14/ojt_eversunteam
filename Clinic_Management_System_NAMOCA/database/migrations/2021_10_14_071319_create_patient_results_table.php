<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient', function (Blueprint $table) {
            $table->increments('id');
            $table -> string ('fullname');
            $table -> string ('address');
            $table -> string ('email');
            $table -> string ('contact');
            $table -> string ('age');
            $table ->  string ('birth');
            $table -> string ('temp');
            $table -> string ('weight');
            $table -> string ('height');
            $table ->timestamps();
        });

        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('patientID');
            $table->foreign('patientID')->references('id')->on('patient')->onDelete('cascade');
            $table -> string ('time');
            $table -> string ('test');
            $table->timestamps();
        });

        Schema::create('payment', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('patientID');
            $table->foreign('patientID')->references('id')->on('results')->onDelete('cascade');
            $table -> string ('bill');
            $table -> string ('cash');
            $table -> string ('change');
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
        Schema::dropIfExists('patient_results');
    }
}
