<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title></title>
</head>

<body>
	<form action="/claim/processor" method="post">
		@csrf

		//advanceCancel:"more14"
		//airlineReason:"airport"
		//claimType:"cancelClaim"
		//connectingFlight:"No"
		//delayedHours:"3"
		//departure:273
		//destination:174
		//flightdate:Sun May 03 2020 00:00:00 GMT+0100 (West Africa Standard Time)
		//route:"flight2"

		advanceCancel:"more14"
		airlineReason:"strike"
		claimType:"cancelClaim"
		conn0:3282
		connectingFlight:"Yes"
		delayedHours:"4"
		departure:135
		destination:65
		flightdate:Wed May 20 2020 00:00:00 GMT+0100 (West Africa Standard Time)
		route:"flight2"

		<br>
		<input id="advanceCancel" type="text" name="advanceCancel" value="more14"><br>
		<input id="airlineReason" type="text" name="airlineReason" value="airport"><br>
		<input id="claimType" type="text" name="claimType" value="cancelClaim"><br>
		<input id="connectingFlight" type="text" name="connectingFlight" value="Yes"><br>
		<input id="conn0" type="text" name="conn0" value="3282"><br>
		<input id="delayedHours" type="text" name="delayedHours" value="4"><br>
		<input id="departure" type="text" name="departure" value="273"><br>
		<input id="destination" type="text" name="destination" value="174"><br>
		<input id="flightdate" type="text" name="flightdate" value="Sun May 03 2020 00:00:00 GMT+0100 (West Africa Standard Time)"><br>
		<input id="route" type="text" name="route" value="flight2"><br>


		<button type="submit" value="Submit">Submit</button>

	</form>
</body>

</html>
