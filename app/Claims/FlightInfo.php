<?php

namespace App\Claims;

class FlightInfo
{
	public $flightArray;

	public function info($flightDate)
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
		foreach ($api_result['data'] as $flight) {


			$formattedOutput[$i]['flight_date'] = $flight['flight_date'];
			$formattedOutput[$i]['flight_status'] = $flight['flight_status'];
			$formattedOutput[$i]['flight_iata'] = $flight['flight']['iata'];
			$formattedOutput[$i]['departure_airport'] = $flight['departure']['airport'];
			$formattedOutput[$i]['departure_iata'] = $flight['departure']['iata'];
			$formattedOutput[$i]['departure_scheduled'] = $this->get_time($flight['departure']['scheduled']);
			$formattedOutput[$i]['departure_actual'] = $this->get_time($flight['departure']['actual']);
			$formattedOutput[$i]['arrival_airport'] = $flight['arrival']['airport'];
			$formattedOutput[$i]['arrival_iata'] = $flight['arrival']['iata'];
			$formattedOutput[$i]['arrival_scheduled'] = $this->get_time($flight['arrival']['scheduled']);
			$formattedOutput[$i]['arrival_actual'] = $this->get_time($flight['arrival']['actual']);
			$formattedOutput[$i]['airline_name'] = $flight['airline']['name'];
			$formattedOutput[$i]['airline_iata'] = $flight['arrival']['iata'];

			$i++;
		}
		//print_r($formattedOutput);
		//exit();

		return $formattedOutput;
	}

	public function get_time($t)
	{
		$tplode = explode("T", $t);
		if (!empty($tplode[1])) {
			$ttplode = explode("+", $tplode[1]);
			return $ttplode[0];
		} else {
			return $tplode[0];
		}
		//print_r($ttplode);
		//exit();
	}
}
