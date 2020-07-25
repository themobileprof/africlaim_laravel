<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirlinesContactTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('airlines_contact', function (Blueprint $table) {
			$table->id();
			$table->string('country')->nullable();
			$table->string('airline')->nullable();
			$table->string('email')->nullable();
			$table->string('phone')->nullable();
			$table->string('url')->nullable();
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
		Schema::dropIfExists('airlines_contact');
	}
}
