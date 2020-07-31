<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompensationsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('compensations', function (Blueprint $table) {
			$table->id();
			$table->string('hours');
			$table->string('short'); // Distance is less than 1,500km
			$table->string('medium'); // Distance is between 1,500km and 3,500km
			$table->string('long'); // Distance is more than 3,500km
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
		Schema::dropIfExists('compensations');
	}
}
