<?php

namespace App\Claims;

use App\Flight;
use App\Verification;


class VerifyClaim
{
	public $verified;
	public $claim;

	public $user_flightIncident;
	public $user_moreOptions;
	public $user_hoursDelayed;
	public $user_incidentReason;

	public $recorded_flightIncident;
	//public $recorded_moreOptions;
	public $recorded_hoursDelayed;
	public $recorded_incidentReason;

	function __construct($claim)
	{

		$this->claim = $claim;

		$this->user_flightIncident = $claim->complaint;
		$this->user_moreOptions = $claim->complaint_options;
		$this->user_hoursDelayed = $claim->complaint_duration;
		$this->user_incidentReason = $claim->airline_reason;

		$this->getFlightInfo($claim->flight_id);
	}

	function getFlightInfo($flight_id)
	{
		// 
		$flight = Flight::find($flight_id);

		$this->recorded_flightIncident = $flight->status;

		$this->recorded_hoursDelayed = ceil($flight->departure_delay / 60);
	}

	function process_flightIncidence()
	{
		if ($this->recorded_flightIncident == 'cancelled' && $this->user_flightIncident == 'cancelClaim') {
			// Flight was cancelled
			if ($this->user_moreOptions == 'more14') {
				$this->verified = 1;
			} else {
				$this->verified = 0;
			}
		} else if ($this->user_flightIncident == 'denyClaim') {
			$this->verified = 1;
		}
	}

	function process_hoursDelayed()
	{
		// if User's claimed delay and reported delay is not more than 1 hour (User most likely truthful)
		if (abs($this->user_hoursDelayed - $this->recorded_hoursDelayed) <= 1) {
			if ($this->user_hoursDelayed >= 3) {
				$this->verified = 1;
			} else {
				$this->verified = 0;
			}
		}
	}


	function process_airlineReason()
	{
		if ($this->recorded_flightIncident == 'incident' || $this->recorded_flightIncident == 'diverted') {

			switch ($this->user_incidentReason) {
					// Unless Airline is able to prove beyond all reasonable doubt that user's reason for eligibility is wrong
				case 'technical':
					$this->verified = 1;
					break;
				case 'bad_weather':
					$this->verified = 0;
					break;
				case 'other_flights':
					$this->verified = 1;
					break;
				case 'airport':
					$this->verified = 0;
					break;
				case 'strike':
					$this->verified = 1;
					break;
				case 'no_reason':
					$this->verified = 1;
					break;
				case 'forgot':
					$this->verified = 1;
					break;
				case 'force_majeure':
					$this->verified = 0;
					break;
				default:
					$this->verified = 1;
			}
		}
	}

	function verify()
	{
		$verification = new Verification;
		$verification->claim_id = $this->claim->id;
		$verification->verified = $this->verified;

		$verification->save();


		return $verification->id;
	}
}
