<?php

namespace App\Http\Controllers;

use App\Jurisdiction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Claim;
use App\Eligibility;

class JurisdictionController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index($claim)
	{
		// Check if this Claim is Eligible before proceeding
		$eligible = Eligibility::where('claim_id', $claim)->first();
		if ($eligible === null) {
			return ("This Claim is not available");
		} else {
			if ($eligible->eligible != 1) {
				return ("This Claim is not eligible for this Step");
			}
		}

		// Get Claim details
		$claim_detail = Claim::find($claim);

		return view('jurisdiction', ["claim" => $claim_detail->complaint]);
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
		//
		$request->validate([
			'document' => 'required|mimes:pdf,doc,docx|max:2048',
		]);

		$docPath = $request->file('document')->store('documents');

		//Update record with document path
		$user = User::find(Auth::user()->id);
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
