<?php

namespace App\Claims;

use App\Flight;

class GetFlights
{

	// Flights with specified Departure *AND* Arrival
	public function get_flights($params)
	{
		//\DB::enableQueryLog();

		$flights  = Flight::where('flight_date', '=', $params['flight_date'])
			->where('departure_iata', '=', $params['departure'])
			->where('arrival_iata', '=', $params['arrival'])
			->orderBy('departure_scheduled', 'asc')
			->get();

		//dd(\DB::getQueryLog());
		//print_r($flights);
		//exit();
		return $flights->toArray();
	}


	// Flights with Specified Departure *OR* Arrival
	public function get_flights_others($params)
	{

		//\DB::enableQueryLog();

		$flights  = Flight::where('flight_date', $params['flight_date'])
			->where(function ($q) use ($params) {
				$q->where('departure_iata', $params['departure'])
					->orWhere('arrival_iata', $params['arrival']);
			})
			->orderBy('departure_scheduled', 'asc')
			->get();
		//dd(\DB::getQueryLog());
		//print_r($flights);
		//exit();

		return $flights->toArray();
	}
}
