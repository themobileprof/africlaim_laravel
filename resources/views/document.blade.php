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
		<h1>Upload Claims Documents</h1>
		<div class="row">
			If your claim passes validation and eligibility, the next step is to provide us documents that will help us process your claim.
			<p>We would be needing you to upload a PDF copy of your initial eTicket, booking confirmation by email or a boarding pass. You do not need the three documents, because usually one is enough.</p>
		</div>
		<div>
			<form action="{{ route('document.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row m-2 p-3">
					<div class="col-md-4">What Document are you submitting?</div>
					<input type="hidden" name="claim" value="{{ $claim->id }}">
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
				<div class="row m-2 p-3">
					<div class="col-md-4"></div>
					<div class="col-md-8">
						<input type="submit" class="btn btn-primary form-control" value="Submit Document">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>

</html>
