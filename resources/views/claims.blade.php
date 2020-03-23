<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Claims Form</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"> <img src="{{ asset('logo.png') }}" alt=""> </div>
      <div class="list-group list-group-flush">
        <a href="/claims/start" class="list-group-item list-group-item-action bg-light">Step 1: Departure and Arrival</a>
        <a href="/claims/flight_date" class="list-group-item list-group-item-action bg-light">Step 2: Flight Date</a>
        <a href="/claims/route" class="list-group-item list-group-item-action bg-light">Step 3: Select Route</a>
        <a href="/claims/complaint" class="list-group-item list-group-item-action bg-light">Step 4: Finishing</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary"> Dashboard </button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Help</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Africlaim
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


    <script type="text/javascript" src="{{ mix('js/claims.js') }}"></script>
      <!-- Menu Toggle Script -->
      <script>
        $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
        });
      </script>
    </body>
</html>
