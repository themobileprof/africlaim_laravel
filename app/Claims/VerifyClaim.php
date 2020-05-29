<?php

namespace App\Claims;

use App\Verification;
use App\Flight;
use Illuminate\Support\Facades\DB;

class VerifyClaim
{
	public $verified;
	public $claim;

	public $user_flightIncident;
	public $user_moreOptions;
	public $user_hoursDelayed;
	public $user_incidentReason;

	public $recorded_flightIncident;
	public $recorded_moreOptions;
	public $recorded_hoursDelayed;
	public $recorded_incidentReason;

	function __construct($claim)
	{

		$this->claim = $claim;

		$this->user_flightIncident = $claim->complaint;
		$this->user_moreOptions = $claim->complaint_options;
		$this->user_hoursDelayed = $claim->complaint_duration;
		$this->user_incidentReason = $claim->airline_reason;
	}

	function getFlightInfo($flight_id)
	{
		// 
		$flight = Flight::find($flight_id);
	}
}

