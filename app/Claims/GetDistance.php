<?php

namespace App\Claims;

use App\Claim;

class GetDistance
{
	public $lat1;
	public $lat2;
	public $lon1;
	public $lon2;
	public $distance; // Kilometers
	public function __construct($claim_id)
	{
		$claim = Claim::find($claim_id);

		$this->lat1 = $claim->destination->latitude;
		$this->lat2 = $claim->arrival->latitude;
		$this->lon1 = $claim->destination->longitude;
		$this->lon2 = $claim->arrival->longitude;
	}

	public function distance()
	{
		if (($this->lat1 == $this->lat2) && ($this->lon1 == $this->lon2)) {
			return 0;
		} else {
			$lonDelta = $this->lon1 - $this->lon2;
			$dist = sin(deg2rad($this->lat1)) * sin(deg2rad($this->lat2)) +  cos(deg2rad($this->lat1)) * cos(deg2rad($this->lat2)) * cos(deg2rad($lonDelta));
			$dist = acos($dist);
			$dist = rad2deg($dist);
			$this->distance = $dist * 60 * 1.1515 * 1.609344; // Distance in Kilometers

		}
	}
}

