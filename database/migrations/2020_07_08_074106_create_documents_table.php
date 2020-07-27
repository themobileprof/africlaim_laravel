<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('documents', function (Blueprint $table) {
			$table->id();
			$table->foreignId('claim_id');
			$table->string('document');
			$table->string('path');
			$table->string('status')->default('Submitted'); //submitted, approved, rejected
			$table->timestamps();
			$table->unique(['claim_id', 'document']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('documents');
	}
}
