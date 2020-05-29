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
		$claims = Claim::where('flight_id', '>', 0)->get();

		foreach ($claims as $claim) {

			$verifier = new \App\Claims\VerifyClaim($claim);

			$verifier->process_flightIncidence();

			if (!empty($verifier->verified)) {
				if ($claim->complaint == 'denyClaim') {
					$vid = $verifier->verify();
					echo '(Claim: ' . $claim->id . ' | Verification Id: ' . $vid . ') All cancelled Claims are Auto verified';
					return true;
				}
			} else {
				$verifier->process_hoursDelayed();

				if (!empty($verifier->verified)) {
					$verifier->process_airlineReason();

					if (!empty($verifier->verified)) {
						$vid = $verifier->verify();
						echo "This Claim ('.$claim->id.' | Verification Id: '.$vid.') has been successfully verified!";
						return true;
					} else {
						echo "This Claim ('.$claim->id.') is not Eligible for Verification. (Disqualification: Airline Reason Parameters)";
						return false;
					}
				} else {
					echo "This Claim ('.$claim->id.') is not Eligible for Verification. (Disqualification: Time Parameters)";
					return false;
				}
			}
		}
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
