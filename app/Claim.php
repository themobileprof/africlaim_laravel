<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
	//

	protected $fillable = [
		'user_id',
		'airline_id',
		'departure_id',
		'arrival_id',
        'connecting',
		'dof',
		'tof',
		'complaint',
		'complaint_duration',
		'complaint_option'
	];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function airline()
	{
		return $this->belongsTo('App\Airline');
	}

	public function arrival()
	{
		return $this->belongsTo('App\Airport', 'arrival_id');
	}

	public function departure()
	{
		return $this->belongsTo('App\Airport', 'departure_id');
	}

	protected $table = 'claims';
}
