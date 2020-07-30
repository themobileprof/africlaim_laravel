<?php

namespace App\Http\Controllers;

use App\Jurisdiction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Claim;

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
