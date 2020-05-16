<?php

namespace App\Claims;

use App\Airport;

class GetConnections
{

	public static function GetConnections($conn)
	{
		if (!empty($conn) || $conn != " ") {
			$connections = Airport::select("name", "city")->find($conn);
			return $connections;
		} else {
			return "";
		}
	}
}
