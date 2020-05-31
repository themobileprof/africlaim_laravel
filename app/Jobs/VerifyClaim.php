<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class VerifyClaim implements ShouldQueue
{
	use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

	public $claim;

	/**
	 * Create a new job instance.
	 *
	 * @return void
	 */
	public function __construct($claim)
	{
		//
		$this->claim = $claim;
	}

	/**
	 * Execute the job.
	 *
	 * @return void
	 */
	public function handle()
	{
		//
		$verifier = new \App\Claims\VerifyClaim($this->claim);

		$verifier->process_flightIncidence();

		if (!empty($verifier->verified)) {
			if ($this->claim->complaint == 'denyClaim') {
				echo '(Claim: ' . $this->claim->id . ') All Denied Claims are Auto verified <br>' . "\n";
			}
		} else {
			$verifier->process_hoursDelayed();
			//print_r($verifier);
			//exit();
			if (!empty($verifier->verified)) {
				$verifier->process_airlineReason();

				if (!empty($verifier->verified)) {
					echo 'This Claim (' . $this->claim->id . ') has been successfully verified! <br>' . " \n";
				} else {
					echo 'This Claim (' . $this->claim->id . ') is not Eligible for Verification. (Disqualification: Airline Reason Parameters) <br>' . " \n";
				}
			} else {
				echo 'This Claim (' . $this->claim->id . ') is not Eligible for Verification. (Disqualification: Time Parameters) <br>' . "\n";
			}
		}
		if ($verifier->verify()) {

			// Send Email
			// $user = User::find($this->claim->user_id)
			$user = ["name" => $this->claim->user->first_name, "email" => $this->claim->user->email];
			dispatch(new SendEmail($user, 2));
		}
	}
}
