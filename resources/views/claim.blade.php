<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Claims</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	<!-- Bootstrap core CSS -->
	<link href={{ asset("css/app.css") }} rel="stylesheet" />

	<!-- Styles -->
	<style>
		body {
			background-color: #FFF;
			font-size: 12px;
		}
	</style>
</head>

<body>
	<div class="flex-center position-ref full-height">
		<div class="row">
			<div class="col-sm-6">
				<ul class="list-group">
					<li class="list-group-item"><strong>Firstname:</strong> {{ $claim->user->first_name }}</li>
					<li class="list-group-item"><strong>Lastname:</strong> {{ $claim->user->last_name }}</li>
					<li class="list-group-item"><strong>Departure:</strong> {{ $claim->departure->name }}</li>
					<li class="list-group-item"><strong>Destination:</strong> {{ $claim->arrival->name }}</li>
					<li class="list-group-item"><strong>Flight Date:</strong> {{ $claim->dof }}</li>
					<li class="list-group-item"><strong>Flight Time:</strong> {{ $claim->tof }}</li>
				</ul>
			</div>
			<div class="col-sm-6">
				<ul class="list-group">
					<li class="list-group-item"><strong>Airline:</strong> {{ $claim->flight->airline_name }}</li>
					<li class="list-group-item"><strong>Connecting Flights:</strong>
						{{ $claim->connections }}
					</li>
					<li class="list-group-item"><strong>Complaint:</strong> {{ $claim->complaint }}</li>
					<li class="list-group-item"><strong>Delay Duration::</strong> {{ $claim->complaint_duration }}</li>
					<li class="list-group-item"><strong>Complaint Option:</strong> {{ $claim->complaint_option }}</li>
					<li class="list-group-item"><strong>Reason for Delay:</strong> {{ $claim->airline_reason }}</li>
				</ul>
			</div>
		</div>
	</div>
</body>

</html>
