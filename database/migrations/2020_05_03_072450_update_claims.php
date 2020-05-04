<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateClaims extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('claims', function (Blueprint $table) {
			//
			$table->string('connecting')->after('arrival_id')->nullable();
			$table->string('airline_reason')->after('complaint_option ')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('claims', function (Blueprint $table) {
			//
			$table->dropColumn(['connecting']);
			$table->dropColumn(['airline_reason']);
		});
	}
}
