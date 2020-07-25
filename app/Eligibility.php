<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eligibility extends Model
{
	//public function claim()
	//{
	//return $this->belongsTo('App\Claim');
	//}

	//
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */

	public function claim()
	{
		return $this->hasOne('App\Claim');
	}

	protected $table = 'eligibilities';
}
