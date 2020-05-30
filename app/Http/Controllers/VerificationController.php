<?php

namespace App\Http\Controllers;

use App\Claim;
use App\Verification;
//use Illuminate\Http\Request;

class VerificationController extends Controller
{
	public function index()
	{
		//
		$claims = Claim::where('flight_id', '>', 0)
			->orderBy('created_at', 'desc')
			->take(100)
			->get();
		//print_r($claims);
		//exit();
		foreach ($claims as $claim) {
			$this->verify($claim);
		}
	}


	function verify($claim)
	{

		$verifier = new \App\Claims\VerifyClaim($claim);

		$verifier->process_flightIncidence();

		if (!empty($verifier->verified)) {
			if ($claim->complaint == 'denyClaim') {
				echo '(Claim: ' . $claim->id . ') All Denied Claims are Auto verified <br>' . "\n";
			}
		} else {
			$verifier->process_hoursDelayed();
			//print_r($verifier);
			//exit();
			if (!empty($verifier->verified)) {
				$verifier->process_airlineReason();

				if (!empty($verifier->verified)) {
					echo 'This Claim (' . $claim->id . ') has been successfully verified! <br>' . " \n";
				} else {
					echo 'This Claim (' . $claim->id . ') is not Eligible for Verification. (Disqualification: Airline Reason Parameters) <br>' . " \n";
				}
			} else {
				echo 'This Claim (' . $claim->id . ') is not Eligible for Verification. (Disqualification: Time Parameters) <br>' . "\n";
			}
		}
		$verifier->verify();
	}


	public function verifyOne($claim_id)
	{
		$claim = Claim::find($claim_id);
		$this->verify($claim);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Eligibility  $eligibility
	 * @return \Illuminate\Http\Response
	 */
	public function update(Verification $verification)
	{
		//

		$verification->verified = '1';
		$verification->mode = 'manual';

		$verification->save();
	}
}
