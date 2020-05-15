<?php

namespace App\Claims;

use App\Claim;

class ProcessClaim
{
	public $airline_continent;
	public $arrival_continent;
	public $departure_continent;
	public $connection = [];

	public function process($claimId)
	{
		// get request continents
		$claim = Claim::first($claimId);

		$this->airline_continent = $claim->airline->country->continent_code;
		$this->arrival_continent = $claim->arrival->country->continent_code;
		$this->departure_continent = $claim->departure->country->continent_code;
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
