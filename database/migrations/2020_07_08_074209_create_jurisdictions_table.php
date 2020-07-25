<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurisdictionsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jurisdictions', function (Blueprint $table) {
			$table->id();
			$table->foreignId('claim_id');
			$table->string('juridiction_type')->default('airline'); //airline, airport
			$table->unsignedBigInteger('claim_jurisdiction_id');
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
		Schema::dropIfExists('jurisdictions');
	}
}
