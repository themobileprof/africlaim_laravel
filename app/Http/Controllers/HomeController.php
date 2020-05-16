<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Claim;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		$claims = Claim::where('user_id', Auth::id())->get();

		return view('home', ['claims' => $claims]);
	}

	/**
	 * Show the application dashboard
	 *
	 *@return \Illuminate\Contracts\Support\Renderable
	 */
	public function adminHome()
	{
		$claims = Claim::with(['user', 'arrival', 'departure'])
			->orderBy('created_at', 'desc')
			->take(100)
			->get();


		return view('adminHome', ['claims' => $claims]);
	}
}
