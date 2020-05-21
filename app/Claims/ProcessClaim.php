<?php

namespace App\Claims;

use App\Claim;
use App\Airport;
use Illuminate\Support\Facades\DB;

class ProcessClaim
{
	public $eligible = false;

	public $airline_continent;
	public $arrival_continent;
	public $departure_continent;
	public $connection_continents = [];

	public function __construct($claim)
	{
		// get request continents
		//$claim = Claim::find($claimId);
		//print_r($claim);
		//exit();

		// Get Airline continent
		$this->airline_continent = $this->getAirlineContinent($claim->flight->airline_name);

		$this->arrival_continent = $this->getAirportContinent($claim->arrival_id);
		$this->departure_continent = $this->getAirportContinent($claim->departure_id);

		$conn = explode(",", $claim->connecting);
		foreach ($conn as $connection) {
			$this->connection_continents[] = $this->getAirportContinent($connection);
		}
	}

	public function getAirportContinent($airport_id)
	{
		$airport = Airport::with('country')->find($airport_id);
		//$airport = $airport->toJson();
		//print_r($airport);
		//exit();
		return $airport->country->continent_code;
	}

	public function getAirlineContinent($airline)
	{
		$airline_det = DB::table('airlines')->where("name", "LIKE", "%$airline%")->first();

		$airline_continent = DB::table('countries')->select('continent_code')->where('id', '=', $airline_det->country_id)->first();

		return $airline_continent;
	}

	public function process_location()
	{
		// Get airline continent and Country -- // Only Europe and Nigeria
		//
	}

	public function processDuration()
	{
		// Process Flight Duration -- // Rule 6 years
	}
}
