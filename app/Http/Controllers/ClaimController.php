<?php

namespace App\Http\Controllers;

use App\Claim;
use Illuminate\Http\Request;

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

		// Add new fields
		// $claim->connecting = $request->connectingFlight;
		// $claim->connections = $request->connections; // Create this in Vue

		$claim->dof = $request->description;
		$claim->tof = "None";
		$claim->complaint = $request->name;
		$claim->complaint_duration = $request->description;
		$claim->complaint_option = "None";

		$claim->save();

		//$claim = Claim::create($request->all());

		// Process Form logic, call class
		$process_claim = \App\Claims\ProcessClaim::process($claim->id);

		// Redirect to user registration form
		return redirect()->route('/claims/processed', ['claims_id' => $claim->id]);
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
