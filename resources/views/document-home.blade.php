<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Claim Documents</title>

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
		<h1>Claims Documents</h1>
		<div class="row">
			If your claim passes validation and eligibility, the next step is to provide us documents that will help us process your claim.
			<p>We would be needing you to upload a PDF copy of your initial eTicket, booking confirmation by email or a boarding pass. You do not need the three documents, because usually one is enough.</p>
		</div>
		<div>

			@foreach ($documents as $doc)
			<div>
				<a href="{{ url('/document/create/$doc->claim_id') }}"></a>
				<br>
				{{ $doc->document }} (<a href="{{ $doc->path }}">Download</a>)
			</div>
			@endforeach
		</div>
	</div>
</body>

</html>
