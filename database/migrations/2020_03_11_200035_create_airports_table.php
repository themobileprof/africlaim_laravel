<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airports', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('city');
            $table->string('country_id', 3)->references('id')->on('users');
            $table->string('IATA');
            $table->string('ICAO');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('altitude');
            $table->string('timezone');
            $table->string('DST');
            $table->string('db_timezone');
            $table->string('type');
            $table->string('source');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airports');
    }
}
