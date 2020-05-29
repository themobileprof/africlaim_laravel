<?php

namespace App\Http\Controllers;

use App\Verification;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
	//
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
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
