<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Claim Documents Home</title>

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
		<h1>Claims Documents </h1>
		<div class="row h4">
			Your Claims documents
		</div>
		<div>

			<ul>
				@foreach ($documents as $doc)
				<li>
					Document for Claim: {{ $doc->claim_id }} <a href="{{ url('/document') }}/{{ $doc->claim_id }}"><i class="fas fa-plus"></i></a>
					<br>
					{{ $doc->document }} (<a href="{{ $doc->path }}">Download</a>)
				</li>
				@endforeach
			</ul>
		</div>
	</div>
</body>

</html>
