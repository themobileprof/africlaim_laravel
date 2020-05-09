<?php

namespace App;

//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
	use HasApiTokens, Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'first_name', 'last_name',  'email', 'phone', 'password',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	public function getFullNameAttribute()
	{
		return "{$this->first_name} {$this->last_name}";
	}


	public function setFirstNameAttribute($value)
	{
		$this->attributes['first_name'] = ucfirst($value);
	}

	public function setLastNameAttribute($value)
	{
		$this->attributes['last_name'] = ucfirst($value);
	}

	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];

	/*
     * Get Claims for the User
     */
	public function claims()
	{
		return $this->hasMany('App\Claim');
	}



	protected $appends = ['full_name'];
}
