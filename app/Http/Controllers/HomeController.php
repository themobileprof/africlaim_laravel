<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
	public function index(Request $request)
	{
		$claimActiveId = $request->claim_id;
		$claims = Claim::where('user_id', Auth::id())->get();

		// Get Featured Details
		foreach ($claims as $claim) {
			if ($claim->id == $claimActiveId) {
				$claimActive = $claim;
				break;
			} else {
				$claimActive = $claim;
			}
		}

		// Get eligibility
		$eligible = DB::table('eligibilities')
			->select('eligible')
			->where('claim_id', '=', $claimActive->id)
			->first();

		$claimActive->push($eligible);

		return view('home', ['claims' => $claims, 'claim_det' => $claimActive]);
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
