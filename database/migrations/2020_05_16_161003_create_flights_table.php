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
			$table->string('flight_status')->nullable();
			$table->string('flight_iata')->nullable();
			$table->string('departure_airport');
			$table->string('departure_iata');
			$table->string('departure_scheduled')->nullable();
			$table->string('departure_actual')->nullable();
			$table->string('arrival_airport');
			$table->string('arrival_iata');
			$table->string('arrival_scheduled')->nullable();
			$table->string('arrival_actual')->nullable();
			$table->string('airline_name')->nullable();
			$table->string('airline_iata')->nullable();
			$table->timestamps();


			$table->unique(['flight_date', 'flight_iata', 'departure_iata', 'departure_scheduled', 'arrival_iata'], 'date_flight_departure_time_arrival');
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
