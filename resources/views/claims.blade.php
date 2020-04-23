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

	<div class="d-flex" id="wrapper">

		<!-- Sidebar -->
		<div class="bg-light border-right" id="sidebar-wrapper">
			<div class="sideover list-group list-group-flush">
				<a href="/claims/start" class="list-group-item list-group-item-action bg-light"><strong>Step 1:</strong> Departure and Arrival</a>
				<a href="/claims/flight_date" class="list-group-item list-group-item-action bg-light"><strong>Step 2:</strong> Flight Date</a>
				<a href="/claims/route" class="list-group-item list-group-item-action bg-light"><strong>Step 3:</strong> Select Route</a>
				<a href="/claims/complaint" class="list-group-item list-group-item-action bg-light"><strong>Step 4:</strong> Finishing</a>
			</div>
		</div>
		<!-- /#sidebar-wrapper -->

		<!-- Page Content -->
		<div id="page-content-wrapper">

			<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
				<i class="fas fa-share-square text-primary d-md-none" id="menu-toggle" style="font-size:20px;"></i>
				<div class="sidebar-heading">
					<a href="https://africlaim.com"><img src="{{ asset('img/africlaim_logo.png') }}" alt=""></a>
				</div>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="#">FAQ</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Info
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Contact Us</a>
								<a class="dropdown-item" href="#">About Us</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<div class="container-fluid">
				<div id="app">
					<app></app>
				</div>
			</div>
		</div>
		<!-- /#page-content-wrapper -->




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
