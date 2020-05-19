<?php

namespace App\Claims;

//use App\Flight;
use Illuminate\Support\Facades\DB;

class FlightInfo
{
	protected $flightArray = [];


	public function info($flightDate, $airport, $label = 'dep_iata')
	{
		// Get API data from aviationstack.com
		$offset = 0;

		while ($offset <= 1000) {

			$queryString = http_build_query([
				'access_key' => '7c1b02ce0ae62383f31d37eda1e2fed2',
				'flight_date' => $flightDate,
				'offset' => $offset,
				$label => $airport,
			]);

			$ch = curl_init(sprintf('%s?%s', 'https://api.aviationstack.com/v1/flights', $queryString));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			$json = curl_exec($ch);
			curl_close($ch);

			$api_result = json_decode($json, true);


			if ($api_result['pagination']['count'] > 0) {
				$this->process($api_result['data']);
			}

			$offset += 100;

			// Sleep for half a second
			usleep(500000);
		}




		//return $formattedOutput;
	}

	protected function process($api_result)
	{

		$i = 0;
		foreach ($api_result as $flight) {


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

		array_push($this->flightArray, $formattedOutput);
	}

	protected function get_time($t)
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

	public function store()
	{

		//print_r($this->flightArray);
		//exit();

		if (count($this->flightArray)) {

			foreach ($this->flightArray as $flights) {
				foreach ($flights as $flight) {
					//print_r($flight);
					//exit();

					// Store record in DB
					DB::table('flights')->insertOrIgnore([

						'flight_date' => $flight['flight_date'],
						'flight_status' => $flight['flight_status'],
						'flight_iata' => $flight['flight_iata'],
						'departure_airport' => $flight['departure_airport'],
						'departure_iata' => $flight['departure_iata'],
						'departure_scheduled' => $flight['departure_scheduled'],
						'departure_actual' => $flight['departure_actual'],
						'arrival_airport' => $flight['arrival_airport'],
						'arrival_iata' => $flight['arrival_iata'],
						'arrival_scheduled' => $flight['arrival_scheduled'],
						'arrival_actual' => $flight['arrival_actual'],
						'airline_name' => $flight['airline_name'],
						'airline_iata' => $flight['airline_iata'],

					]);




					//$f = new Flight;

					//$f->flight_date = $flight['flight_date'];
					//$f->flight_status = $flight['flight_status'];
					//$f->flight_iata = $flight['flight_iata'];
					//$f->departure_airport = $flight['departure_airport'];
					//$f->departure_iata = $flight['departure_iata'];
					//$f->departure_scheduled = $flight['departure_scheduled'];
					//$f->departure_actual = $flight['departure_actual'];
					//$f->arrival_airport = $flight['arrival_airport'];
					//$f->arrival_iata = $flight['arrival_iata'];
					//$f->arrival_scheduled = $flight['arrival_scheduled'];
					//$f->arrival_actual = $flight['arrival_actual'];
					//$f->airline_name = $flight['airline_name'];
					//$f->airline_iata = $flight['airline_iata'];

					//if ($f->save()) {
					//return true;
					//} else {
					//return false;
					//}

					//echo $f->id;
					//exit();
				}
			}


			return true;
		} else {
			return false;
		}
	}
}
