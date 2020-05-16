<?php

namespace App\Claims;

class FlightInfo
{

	public function __construct($flightDate)
	{
		// Get API data from aviationstack.com

		$queryString = http_build_query([
			'access_key' => '7c1b02ce0ae62383f31d37eda1e2fed2',
			'flight_date' => $flightDate
		]);

		$ch = curl_init(sprintf('%s?%s', 'https://api.aviationstack.com/v1/flights', $queryString));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$json = curl_exec($ch);
		curl_close($ch);

		$api_result = json_decode($json, true);

		$i = 0;
		foreach ($api_result['results'] as $flight) {


			$formattedOutput[$i]['flight_date'] = $flight['flight_date'];
			$formattedOutput[$i]['flight_status'] = $flight['flight_status'];
			$formattedOutput[$i]['flight_iata'] = $flight['flight']['iata'];
			$formattedOutput[$i]['departure_airport'] = $flight['departure']['airport'];
			$formattedOutput[$i]['departure_iata'] = $flight['departure']['iata'];
			$formattedOutput[$i]['departure_scheduled'] = $flight['departure']['scheduled'];
			$formattedOutput[$i]['departure_actual'] = $flight['departure']['actual'];
			$formattedOutput[$i]['arrival_airport'] = $flight['arrival']['airport'];
			$formattedOutput[$i]['arrival_iata'] = $flight['arrival']['iata'];
			$formattedOutput[$i]['arrival_scheduled'] = $flight['arrival']['scheduled'];
			$formattedOutput[$i]['arrival_actual'] = $flight['arrival']['actual'];
			$formattedOutput[$i]['airline_name'] = $flight['airline']['name'];
			$formattedOutput[$i]['airline_iata'] = $flight['arrival']['iata'];
		}

		return $formattedOutput;
	}
}

