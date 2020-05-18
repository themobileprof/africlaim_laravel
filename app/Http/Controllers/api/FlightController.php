<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		//
		$flights = Flight::where('flight_date', $request->flight_date)
			->where(function ($q) use ($request) {
				$q->where('departure_iata', $request->departure)
					->orWhere('arrival_iata', $request->arrival);
			})
			->get();





		//$flights = $flights->where('departure_iata', $request->departure)
		//->orWhere('arrival_iata', $request->arrival)
		//->orderBy('departure_scheduled', 'desc')
		//->get();

		//return $flights;

		if (count($flights)) { // If there are records for the specified days
			//return $flightDate;
			return response()->json($flights);
		} else { // If there are no records for this date, go get records with API, and store in tables
			//return "No oh";
			$apiFlights = new \App\Claims\FlightInfo();
			$foutput = $apiFlights->info($request->flight_date);

			//echo "Here:";
			//return $foutput;
			//exit();


			if (count($foutput)) {
				$flightList = [];
				$i = 0;
				foreach ($foutput as $flight) {
					// Store record in DB, and get flight Id
					$flightId = $this->store($flight);

					//Get recored with specific departure and arrival
					if ($flight['departure_iata'] == $request->departure || $flight['arrival_iata'] == $request->arrival) {
						$flightList[$i]['id'] = $flightId;
						$flightList[$i] = $flight;
					}

					$i++;
				}
			}

			return response()->json($flightList);
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store($flight)
	{
		//
		//print_r($flight);
		//exit();

		$f = new Flight;

		$f->flight_date = $flight['flight_date'];
		$f->flight_status = $flight['flight_status'];
		$f->flight_iata = $flight['flight_iata'];
		$f->departure_airport = $flight['departure_airport'];
		$f->departure_iata = $flight['departure_iata'];
		$f->departure_scheduled = $flight['departure_scheduled'];
		$f->departure_actual = $flight['departure_actual'];
		$f->arrival_airport = $flight['arrival_airport'];
		$f->arrival_iata = $flight['arrival_iata'];
		$f->arrival_scheduled = $flight['arrival_scheduled'];
		$f->arrival_actual = $flight['arrival_actual'];
		$f->airline_name = $flight['airline_name'];
		$f->airline_iata = $flight['airline_iata'];

		$f->save();

		return $f->id;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Flight  $flight
	 * @return \Illuminate\Http\Response
	 */
	public function show(Flight $flight)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Flight  $flight
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Flight $flight)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Flight  $flight
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Flight $flight)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Flight  $flight
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Flight $flight)
	{
		//
	}
}
