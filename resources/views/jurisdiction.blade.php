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
		<h1>Claims Jurisdiction</h1>
		<div class="row">
			<p>
				Based on our Calculation, the distance between {{ $claim->destination->name }} and {{ $claim->arrival->name }} is
			</p>
			<p>This qualifies you for between ${{ $claim->amount1 }} and ${{ $claim->amount2 }}, kindly confirm the hours of delay you experienced</p>
			<a href="" class="btn btn-primary btn-lg">Yes</a>
			<a href="" class="btn btn-primary btn-lg">No</a>
		</div>

	</div>
</body>

</html>
