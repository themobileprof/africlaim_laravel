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
		<h1>Documents Required to Process Claims</h1>
		<div class="row h4">
			Eligible Claims
		</div>
		<div>
			@foreach ($claims as $claim)

			Document(s) for: <b>{{ $claim->departure->name }}</b> to <b>{{ $claim->arrival->name }}</b> on {{ $claim->dof }} <a href="{{ url('/document') }}/{{ $claim->id }}" class="text-primary"><i class="fas fa-plus"></i> Add</a>
			<ul>
				@foreach ($documents as $doc)
				@if ($doc->claim_id == $claim->id)
				<li>
					{{ $doc->document }} (<a href="/storage/{{ $doc->path }}" target="_blank">Download</a>) <a class="text-danger" href="{{ route('document.delete', ['document' => $doc->id]) }}" onclick="return confirm('Are you sure you want to delete this file?')"><i class="fa fa-times"></i></a>

				</li>
				@endif
				@endforeach
			</ul>
			@endforeach
		</div>
	</div>
</body>

</html>
