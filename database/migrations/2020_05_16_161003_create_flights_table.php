<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('flights', function (Blueprint $table) {
			$table->id();
			$table->date('flight_date');
			$table->string('flight_status');
			$table->string('flight_iata');
			$table->string('departure_airport');
			$table->string('departure_iata');
			$table->string('departure_scheduled');
			$table->string('departure_actual');
			$table->string('arrival_airport');
			$table->string('arrival_iata');
			$table->string('arrival_scheduled');
			$table->string('arrival_actual');
			$table->string('airline_name');
			$table->string('airline_iata');
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
		Schema::dropIfExists('flights');
	}
}
