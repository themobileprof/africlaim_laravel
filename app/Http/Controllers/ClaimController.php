<?php

namespace App\Http\Controllers;

use App\Claim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

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

		//advanceCancel:"more14"
		//airlineReason:"airport"
		//claimType:"cancelClaim"
		//connectingFlight:"No"
		//delayedHours:"3"
		//departure:273
		//destination:174
		//flightdate:Sun May 03 2020 00:00:00 GMT+0100 (West Africa Standard Time)
		//route:"flight2"


		// Populate Claim
		$claim = new Claim;


		//if user is logged in, get his id
		if (Auth::check()) {
			$claim->user_id = Auth::id();
		} else {
			// Get Guest UserId
			$claim->user_id = DB::table('users')->where('email', "guest@localhost")->first()->id;
		}


		$connectionsString = "";
		// Process Connecting Flight
		for ($i = 0; $i < 10; $i++) {
			$conStr = "conn" . $i;

			if (!empty($request->$conStr)) {
				$connectionsString .= $request->$conStr . ",";
			} else {
				break;
			}
		}
		$claim->connecting = $connectionsString;
		// $claim->connecting = $request->connectingFlight;



		if ($request->route) {
			$claim->flight_id = $request->route;
		} else {
			$claim->flight_id = 0;
		}

		$departure = DB::table('airports')->select('id')->where('IATA', '=', $request->departure)->first();
		$claim->departure_id = $departure->id;

		$arrival = DB::table('airports')->select('id')->where('IATA', '=', $request->destination)->first();
		$claim->arrival_id = $arrival->id;

		$dof = explode("00:00:00", $request->flightdate);
		$claim->dof = date('Y-m-d', strtotime($dof[0]));

		if ($request->tof) {
			$claim->tof = $request->tof; // Update this with time from form
		} else {
			$claim->tof = "00:00:00";
		}
		$claim->complaint = $request->claimType;
		$claim->complaint_duration = $request->delayedHours;

		if ($request->claimType == "cancelClaim") {
			$claim->complaint_option = $request->advanceCancel;
		} elseif ($request->claimType == "denyClaim") {
			$claim->complaint_option = $request->bumped;
		} else {
			$claim->complaint_option = "Delayed";
		}

		$claim->airline_reason = $request->airlineReason;

		if ($claim->save()) {
			if (!empty($request->route)) {
				$this->process($claim);
			}
			return $claim->id;
		} else {
			return false;
		}
		//return "Of course " . $connectionsString . " this here.";


	}


	// Process Claim
	public function process($claim)
	{
		$claims = new \App\Claims\ProcessClaim($claim);

		// Process the claim
		$claims->processLocation();

		// Store the Processed data
		print_r($claims->store());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Claim  $claim
	 * @return \Illuminate\Http\Response
	 */
	public function show($claim)
	{
		//
		$claimOne = Claim::findOrFail($claim);

		// Process connecting flights
		$conns = explode(",", $claimOne->connecting);

		$conn_det = "";
		$conn_det .= (\App\Claims\GetConnections::GetConnections($conns));

		//foreach ($conns as $conn) {

		//}

		$claimOne->connections = $conn_det;


		// Get eligibility
		$eligible = DB::table('eligibilities')
			->select('eligible')
			->where('claim_id', '=', $claim)
			->first();

		if (!isset($eligible->eligible)) {
			$claimOne->eligible = NULL;
		} else {
			if ($eligible->eligible) {
				$claimOne->eligible = "Eligible";
			} else {
				$claimOne->eligible = "Not Eligible";
			}
		}


		return view('claim', ['claim' => $claimOne]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Claim  $claim
	 * @return \Illuminate\Http\Response
	 */
	public function edit($claim)
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

	public function editEligibility(Request $request, $claim)
	{
		//print_r($claim->pluck('id'));
		if ($request->eligible == 'yes') {
			$eligible = '1';
		} else {
			$eligible = '0';
		}

		DB::table('eligibilities')->updateOrInsert(
			['claim_id' => $claim],
			['eligible' => $eligible, 'mode' => 'manual']
		);

		return redirect()->back();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Claim  $claim
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($claim)
	{
		//
		$claimDet = Claim::find($claim);
		$claimDet->delete();

		echo "You have deleted this Claim";

		return redirect('/blank');
	}
















	// TEST method
	public function tester(Claim $claim)
	{
		$this->process($claim);
	}
}
