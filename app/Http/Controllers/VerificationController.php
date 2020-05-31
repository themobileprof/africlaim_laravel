<?php

namespace App\Http\Controllers;

use App\Claim;
use App\Verification;
use App\Jobs\VerifyClaim;
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
			//$this->dispatch(new VerifyClaim($claim));
			VerifyClaim::dispatch($claim);
		}
	}


	public function verifyOne($claim_id)
	{
		$claim = Claim::find($claim_id);
		VerifyClaim::dispatch($claim)->delay(now()->addMinutes(1));
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
