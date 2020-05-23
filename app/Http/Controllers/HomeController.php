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
		//print_r($eligible);
		if (isset($eligible->eligible)) {

			$claimActive->eligible = $eligible->eligible;
		} else {

			$claimActive->eligible = NULL;
		}

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


		$auto_claims = 0;
		$manual_claims = 0;
		$not_eligible = 0;
		$not_processed = 0;

		foreach ($claims as $claim) {

			$e = DB::table('eligibilities')
				->where('claim_id', '=', $claim->id)
				->first();

			// Check for Eligibility
			if (empty($e->eligible)) {
				if (isset($e->eligible)) {
					$not_eligible++;
					$eligible[$claim->id] = "Not Eligible";
				} else {
					$not_processed++;
					$eligible[$claim->id] = "Not Processed";
				}
			} else {
				$eligible[$claim->id] = "Eligible";

				if ($e->mode == "auto") {
					$auto_claims++;
				} else {
					$manual_claims++;
				}
			}
		}

		// Get eligibility
		// print_r($eligible);

		return view('adminHome', ['claims' => $claims, 'eligibility' => $eligible, 'auto' => $auto_claims, 'manual' => $manual_claims, 'not_eligible' => $not_eligible, 'not_processed' => $not_processed]);
	}
}
