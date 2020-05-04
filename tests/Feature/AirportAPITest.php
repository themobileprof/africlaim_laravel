<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AirportAPITest extends TestCase
{
	/**
	 * A basic feature test example.
	 *
	 * @return void
	 */
	public function testGetAirports()
	{
		$response = $this->getJson('/api/airports/');
		$response->assertStatus(201);
	}

	public function testSearchAirports()
	{
		$response = $this->getJson('/api/airports/murta');
		$response->assertStatus(201);
	}

	public function testGetAirport()
	{
		$response = $this->getJson('/api/airport/20');
		$response->assertStatus(201);
	}
}
