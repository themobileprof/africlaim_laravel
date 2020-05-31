<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\EmailForQueuing;
use Mail;

class SendEmail implements ShouldQueue
{
	use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

	protected $user;
	public $type;
	/**
	 * Create a new job instance.
	 *
	 * @return void
	 */
	public function __construct($user, $type = '1')
	{
		//
		$this->user = $user;
		$this->type = $type;
	}

	/**
	 * Execute the job.
	 *
	 * @return void
	 */
	public function handle()
	{
		//
		$email = new EmailForQueuing($this->user, $this->type);
		Mail::to('samuelanyaele@gmail.com')->send($email);
		//Mail::to($this->user['email'])->send($email);
	}
}
