<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('airline_id');
            $table->foreignId('departure_id');
           $table->foreignId('arrival_id');
            $table->date('dof');
            $table->time('tof');
            $table->enum('complaint', ['delayed',  'denied', 'cancelled']);
            $table->string('complaint_duration');
            $table->string('complaint_option');
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('airline_id')->references('id')->on('airlines');
            $table->foreign('departure_id')->references('id')->on('airports');
            $table->foreign('arrival_id')->references('id')->on('airports');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('claims');
    }
}
