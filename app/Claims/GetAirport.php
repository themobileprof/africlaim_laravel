<?php

namespace App\Claims;

use App\Airport;

class GetAirport
{


	public function from_iata($iata)
	{
		return Airport::select("id")
			->where("IATA", $iata)
			->first();
	}
}

