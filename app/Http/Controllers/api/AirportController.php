<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AirportResource;
use Illuminate\Http\Request;
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
        if ($search){
            return AirportResource::collection(Airport::where('name', 'like', '%' . $search . '%')->paginate(25));
        } else {
            return AirportResource::collection(Airport::paginate(25));
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
        return new AirportResource($airport);
    }

}
