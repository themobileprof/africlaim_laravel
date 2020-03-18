<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeedingController extends Controller
{
    //
    /**
     * Show the seeding page
     *
     *@return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){

        return view('seedingHome');
    }
}
