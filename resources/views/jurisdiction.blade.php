<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Where to Claim</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	<!-- Bootstrap core CSS -->
	<link href={{ asset("css/app.css") }} rel="stylesheet" />

	<!-- Styles -->
	<style>
		body {
			background-color: #FFF;
			font-size: 14px;
		}
	</style>
</head>

<body>
	<div class="p-4">
		<h1>Claims Additional Info</h1>
		<div class="row">
			<p>
				Based on our Calculation, the distance between {{ $claim->destination->name }} and {{ $claim->arrival->name }} is
			</p>
			<p>This qualifies you for between ${{ $claim->amount1 }} and ${{ $claim->amount2 }}, kindly confirm the hours of delay you experienced</p>
			<button class></button>
			<a href="" class="btn btn-primary btn-lg">2</a>
		</div>
		<div>
			{{ $claim }}
			<form action="{{ url('where.store') }}">
				@csrf
				<div class="row m-2 p-3">
					<div class="col-md-4">What Document are you submitting?</div>
					<div class="col-md-8">
						<select id="document_type" name="document_type" class="form-control">
							<option value="ticket">eTicket</option>
							<option value="booking">Booking Confirmation</option>
							<option value="boarding">Boarding Pass</option>
						</select>
					</div>
				</div>
				<div class="row m-2 p-3">
					<div class="col-md-4">Upload</div>
					<div class="col-md-8">
						<input id="document" type="file" name="document" class="form-control">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>

</html>
