<?php

namespace App\Http\Controllers;

use App\Jurisdiction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Claim;
use App\Compensation;

class JurisdictionController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index($claim)
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create(Claim $claim)
	{
		//
		$distance = new \App\Claims\GetDistance($claim->id);
		$dist = $distance->distance(); // get distance between airports

		$compensation = Compensation::all();

		foreach ($compensation as $comp) {
			if ($comp->hours == '<4') { // Less than 4 hours

				if ($dist < 1500) {
					// Short distance
					$claim['amount1'] = $comp->short;
				} else if ($dist < 3500) {
					// Medium Distance
					$claim['amount1'] = $comp->medium;
				} else {
					// Long Distance
					$claim['amount1'] = $comp->long;
				}
			}

			if ($comp->hours == '>4') { // More than 4 hours
				if ($dist < 1500) {
					// Short distance
					$claim['amount2'] = $comp->short;
				} else if ($dist < 3500) {
					// Medium Distance
					$claim['amount2'] = $comp->medium;
				} else {
					// Long Distance
					$claim['amount2'] = $comp->long;
				}
			}
		}

		return view('jurisdiction', ['claim' => $claim]);
	}

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
	 * Display the specified resource.
	 *
	 * @param  \App\Jurisdiction  $jurisdiction
	 * @return \Illuminate\Http\Response
	 */
	public function show(Jurisdiction $jurisdiction)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Jurisdiction  $jurisdiction
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Jurisdiction $jurisdiction)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Jurisdiction  $jurisdiction
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Jurisdiction $jurisdiction)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Jurisdiction  $jurisdiction
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Jurisdiction $jurisdiction)
	{
		//
	}
}
