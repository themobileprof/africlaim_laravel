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
			$table->foreignId('flight_id')->nullable();
			$table->foreignId('departure_id');
			$table->foreignId('arrival_id');
			$table->string('connecting')->nullable();
			$table->date('dof');
			$table->time('tof');
			$table->string('complaint');
			$table->string('complaint_duration');
			$table->string('complaint_option');
			$table->string('airline_reason')->nullable();
			$table->timestamps();
			$table->softDeletes();
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
