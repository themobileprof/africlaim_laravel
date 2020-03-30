<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Http\Resources\AirlineResource;
use App\Airline;

class AirlineController extends Controller
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
            return AirlineResource::collection(Airline::where('name', 'like', '%' . $search . '%')->paginate(25));
        } else {
            return AirlineResource::collection(Airline::paginate(25));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(airline $airline)
    {
        //
        return new AirlineResource($airline);
    }
}
