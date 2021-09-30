<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}