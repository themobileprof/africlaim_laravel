<?php

namespace App\Claims;

//use App\Claim;
use App\Airport;
use Illuminate\Support\Facades\DB;

class ProcessClaim
{
	public $eligible;
	public $claim;

	public $airline = [];
	public $arrival = [];
	public $departure = [];
	public $connection_continents;

	public function __construct($claim)
	{
		// get request continents
		//print_r($claim);
		//exit();

		$this->claim = $claim;

		$this->arrival = $this->getAirportContinent($claim->arrival_id);
		$this->departure = $this->getAirportContinent($claim->departure_id);

		$conn = explode(",", $claim->connecting);
		foreach ($conn as $connection) {
			$connection = str_replace(' ', '', $connection);
			if (!empty($connection)) {

				$cc = $this->getAirportContinent($connection);
				$this->connection_continents .= $cc['continent'] . ","; // Unly store continents
			}
		}

		// Get Airline continent
		if (!empty($claim->flight_id)) {
			$this->airline = $this->getAirlineContinent($claim->flight->airline_name);
		}
	}

	public function getAirportContinent($airport_id)
	{

		$airport = Airport::with('country')->find($airport_id);
		//$airport = $airport->toJson();
		//print_r($airport);
		//exit();
		$airportArray['country'] = $airport->country->id;
		$airportArray['continent'] = $airport->country->continent_code;

		return $airportArray;
	}

	public function getAirlineContinent($airline)
	{
		$airline_det = DB::table('airlines')->where("name", "LIKE", "%$airline%")->first();

		//print_r($airline_det);
		//exit();
		$airline_continent = DB::table('countries')->select('continent_code')->where('id', '=', $airline_det->country_id)->first();

		$airlineArray['country'] = $airline_det->country_id;
		$airlineArray['continent'] = $airline_continent;

		return $airlineArray;
	}

	public function processLocation()
	{
		// Process flight Continent -- // Only Europe
		if ($this->departure['continent'] == 'EU') { // Automatic eligibility
			//$this->eligible = true;
		} else {
			if (strpos($this->connection_continents, 'EU')) {
				//$this->eligible = true;
			} else {
				if ($this->airline['continent'] == 'EU' && $this->arrival['continent'] == 'EU') {
					//$this->eligible = true;
				} else {
					$this->eligible = false;
				}
			}
		}


		// Process flight Countries - Nigeria
		if (($this->departure['country'] == 'NG' || $this->arrival['country'] == 'NG') && $this->airline['continent'] != 'EU') {
			if ($this->airline['country'] == 'NG' && ($this->departure['country'] != 'NG' || $this->arrival['country'] != 'NG')) {
				$this->eligible = false;
			} else if ($this->airline['country'] != 'NG' && $this->departure['country'] == 'NG' && $this->arrival['country'] == 'NG') {
				$this->eligible = false;
			}
		}


		// Process airline Countries - US
		if ($this->departure['country'] == 'US' && $this->arrival['country'] == 'US') {
			if ($this->claim->complaint == ('cancelClaim' || 'delayClaim')) {
				$this->eligible = false;
			}
		}
	}

	public function store()
	{
		$eligible = ($this->eligible) ? '1' : '0';
		return DB::table('eligibilities')->insertGetId(
			['claim_id' => $this->claim->id, 'eligible' => $eligible]
		);
	}



	public function processDuration()
	{
		// Process Flight Duration -- // Rule 6 years
	}
}
