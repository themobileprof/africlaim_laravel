@extends('layouts.app')

@section('content')
<!-- Main Content -->
<div id="content">

	<!-- Topbar -->
	<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

		<!-- Sidebar Toggle (Topbar) -->
		<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
			<i class="fa fa-bars"></i>
		</button>

		<!-- Topbar Search -->


		<!-- Topbar Navbar -->
		<ul class="navbar-nav ml-auto">

			<!-- Nav Item - Search Dropdown (Visible Only XS) -->


			<!-- Nav Item - Alerts -->
			<li class="nav-item dropdown no-arrow mx-1">
				<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-bell fa-fw"></i>
					<!-- Counter - Alerts -->
					<span class="badge badge-danger badge-counter">2+</span>
				</a>
				<!-- Dropdown - Alerts -->
				<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
					<h6 class="dropdown-header">
						Alerts Center
					</h6>
					<a class="dropdown-item d-flex align-items-center" href="#">
						<div class="mr-3">
							<div class="icon-circle bg-primary">
								<i class="fas fa-file-alt text-white"></i>
							</div>
						</div>
						<div>
							<span class="font-weight-bold">12 new auto approved Claims</span>
						</div>
					</a>

					<a class="dropdown-item d-flex align-items-center" href="#">
						<div class="mr-3">
							<div class="icon-circle bg-warning">
								<i class="fas fa-exclamation-triangle text-white"></i>
							</div>
						</div>
						<div>
							4 Applications automatically rejected by the Bots.
						</div>
					</a>
					<a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
				</div>
			</li>

			<div class="topbar-divider d-none d-sm-block"></div>

			<!-- Nav Item - User Information -->
			<li class="nav-item dropdown no-arrow">
				<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->firstname }} </span>
					<img class="img-profile rounded-circle" src="{{ asset('img/avatar.png') }}">
				</a>
				<!-- Dropdown - User Information -->
				<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
					<a class="dropdown-item" href="#">
						<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
						Profile
					</a>
					<a class="dropdown-item" href="#">
						<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
						Settings
					</a>
					<a class="dropdown-item" href="#">
						<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
						Activity Log
					</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">
						<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
						Logout
					</a>
				</div>
			</li>

		</ul>

	</nav>
	<!-- End of Topbar -->

	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
			<button onclick="window.print()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</button>
		</div>

		<!-- Content Row -->
		<div class="row">

			<!-- Auto Approved Claims by the Bots -->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-success shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Auto Eligible Claims</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">{{ $auto }}</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-check-circle fa-2x text-success"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Claims Processed by Humans -->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-primary shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Manual Eligible Claims</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">{{ $manual }}</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-check fa-2x text-primary"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Autorejected claims by the bots -->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-danger shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Not Eligible</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">{{ $not_eligible }}</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-times fa-2x text-danger"></i>
							</div>
						</div>
					</div>
				</div>
			</div>



			<!-- Not Processed Processing -->
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-warning shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">{{ $not_processed }}</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-spinner fa-pulse fa-2x text-warning"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Content Row -->

		<div class="row">

			<!-- Area Chart -->
			<div class="col-xl-4 col-lg-5">
				<div class="card shadow mb-4">
					<!-- Card Header - Dropdown -->
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
						<h6 class="m-0 font-weight-bold text-primary">Usage Statistics</h6>
						<div class="dropdown no-arrow">
							<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
								<div class="dropdown-header">View Options:</div>
								<a class="dropdown-item" href="#">View by Numbers</a>
								<a class="dropdown-item" href="#">View by Claims</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#"></a>
							</div>
						</div>
					</div>
					<!-- Card Body -->
					<div class="card-body">
						<div class="chart-area">
							<canvas id="myAreaChart"></canvas>
						</div>
					</div>
				</div>
			</div>


			<div class="col-xl-8 col-lg-7">

				<!-- Illustrations -->
				<div id="details" class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Details</h6>
					</div>
					<div class="card-body">
						<div class="text-center">
							<iframe name="showclaim" id="showclaim" src="{{ asset('img/screens.png') }}" style="width:100%; height:350px; overflow:none;" scrolling="no" frameborder="0"></iframe>
						</div>
					</div>
				</div>

			</div>
		</div>


		<div class="card shadow mb-4">

			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 12px;">
						<thead>
							<tr>
								<th>Name</th>
								<th>Departure</th>
								<th>Destination</th>
								<th>Date of Flight</th>
								<th>Complaint</th>
								<th>Eligible</th>
								<th></th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Name</th>
								<th>Departure</th>
								<th>Destination</th>
								<th>Date of Flight</th>
								<th>Complaint</th>
								<th>Eligible</th>
								<th></th>
							</tr>
						</tfoot>
						<tbody>
							@foreach ($claims as $claim)
							<tr>
								<td>{{ $claim->user->full_name }}</td>
								<td>{{ $claim->departure->name }} <small>({{ $claim->departure->city }})</small></td>
								<td>{{ $claim->arrival->name }} <small>({{ $claim->arrival->city }})</small></td>
								<td>{{ $claim->dof }}</td>
								<td>{{ $claim->complaint }}</td>
								<td>
									@if ($eligibility[$claim->id] == 'Eligible')
									<strong class="text-success">{{ $eligibility[$claim->id] }}</strong>
									@else
									{{ $eligibility[$claim->id] }}

									@endif
								</td>
								<td>
									<a href="/claim/{{ $claim->id }}" target="showclaim"><i class="fas fa-play showdetails"></i></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
	<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
