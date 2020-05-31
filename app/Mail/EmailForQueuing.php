<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailForQueuing extends Mailable
{
	use Queueable, SerializesModels;

	public $view;
	public $origin = 'themobileprof.com@gmail.com'; // Change this to your email address after configuring the .env file
	public $subject;

	public $name;
	public $email;
	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	public function __construct($user, $type = '1')
	{
		//
		$this->name = $user['name'];
		$this->email = $user['email'];

		if ($type == '2') {
			$this->view = "mail.verify";
			$this->subject = "You Claims has been Verified";
		} else {
			$this->view = "mail.welcome";
			$this->subject = "Your Claim is being processed";
		}
	}

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build()
	{
		return $this->from($this->origin, 'AfriClaim')
			->subject($this->subject)
			->view($this->view, ['name' => $this->name, 'email' => $this->email]);
	}
}
