<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
	//

	protected $fillable = [
		'user_id',
		'flight_id',
		'departure_id',
		'arrival_id',
		'connecting',
		'dof',
		'tof',
		'complaint',
		'complaint_duration',
		'complaint_option'
	];

	public function getDofAttribute($value)
	{
		return date("D. j M, Y", strtotime($value));
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function flight()
	{
		return $this->belongsTo('App\Flight', 'flight_id');
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
