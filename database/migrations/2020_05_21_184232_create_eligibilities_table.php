<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEligibilitiesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('eligibilities', function (Blueprint $table) {
			$table->id();
			$table->foreignId('claim_id');
			$table->enum('eligible', ['1', '0'])->default('0');
			$table->enum('mode', ['auto', 'manual'])->default('auto');
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
		Schema::dropIfExists('eligibilities');
	}
}
