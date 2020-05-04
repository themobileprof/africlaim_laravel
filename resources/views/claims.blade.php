<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Claims Form</title>

	<!-- Font Awesome -->
	<link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">

	<!-- Custom styles for this template -->
	<link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">


</head>

<body>

	<div>


		<form action="/claim/process">
            @csrf
			<div id="app">
				<app></app>
			</div>
		</form>


	</div>
	<!-- /#wrapper -->

	<script src="{{ mix('js/app.js') }}"></script>

	<!-- Menu Toggle Script -->
	<script>
		$("#menu-toggle").click(function(e) {
			e.preventDefault();
			$("#wrapper").toggleClass("toggled");
		});
	</script>
</body>

</html>
