<?php

namespace App\Http\Controllers;

use App\Claim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClaimController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
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
	public function store(Request $request)
	{
		//First Register User, then get his id


		// Populate Claim
		$claim = new Claim;
		$claim->user_id = $request->name;
		$claim->airline_id = $request->description;
		$claim->departure_id = $request->departureId;
		$claim->arrival_id = $request->destinationId;

		// Process Connecting Flight
		for ($i = 10; $i < 10; $i++) {
			$conn_contain = '$request.conn' . $i;

			if (!empty($$conn_contain)) {
				$connectionsString .= ", " . $$conn_contain;
			} else {
				break;
			}
		}
		$claim->connections = $connectionsString;
		// $claim->connecting = $request->connectingFlight;

		$claim->dof = $request->flightDate;
		$claim->tof = time();
		$claim->complaint = $request->claimType;
		$claim->complaint_duration = $request->delayedHours;

		if ($request->claimType == "cancelClaim") {
			$claim->complaint_option = $request->advanceCancel;
		} elseif ($request->claimType == "denyClaim") {
			$claim->complaint_option = $request->bumped;
		}

		$claim->airline_reason = $request->airlineReason;

		$claim->save();


		//$claim = Claim::create($request->all());

		// Process Form logic, call class
		if (\App\Claims\ProcessClaim::process($claim->id)) {
			//if user already logged in, redirect to dashboard
			if (Auth::check()) {
				return redirect()->route('/home', ['claim' => $claim->id]);
			} else {
				// Display registration form
				return redirect()->route('register', ['claim' => $claim->id]);
			}
		} else {
			//If the form does not pass processing
			return redirect()->route('/claims/processed', ['claim' => $claim->id]);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Claim  $claim
	 * @return \Illuminate\Http\Response
	 */
	public function show(Claim $claim)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Claim  $claim
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Claim $claim)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Claim  $claim
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Claim $claim)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Claim  $claim
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Claim $claim)
	{
		//
	}
}
