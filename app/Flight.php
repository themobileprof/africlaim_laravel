<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
	//
	protected $table = 'flights';

	public function claim()
	{
		return $this->hasMany('App\Claim');
	}
}
