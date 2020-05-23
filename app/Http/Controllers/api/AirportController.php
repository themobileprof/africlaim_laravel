<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
//use App\Http\Resources\AirportResource;
//use Illuminate\Http\Request;
use App\Airport;

class AirportController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:api')->except(['index', 'show']);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index($search = null)
	{
		//
		if ($search) {
			$airport_search = Airport::where('name', 'like', $search . '%')->orWhere('city', 'like', $search . '%')->get();
			return response()->json($airport_search);

			//$airport_search = Airport::where('name', 'like', '%' . $search . '%')->paginate(25);
			//return AirportResource::collection($airport_search);
		} else {
			return response()->json(Airport::get(), 200);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */

	public function show(airport $airport)
	{
		//return new AirportResource($airport);

		//return "Yes";
		return response()->json(compact('airport'), 200);
	}
}
