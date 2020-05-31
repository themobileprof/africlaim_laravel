<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
	//
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'claim_id', 'verified'
	];

	protected $table = "verifications";
}
