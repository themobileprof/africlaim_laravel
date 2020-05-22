@extends('layouts.app')

@section('content')
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

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
					<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-envelope fa-fw"></i>
						<!-- Counter - Messages -->
						<span class="badge badge-danger badge-counter">1</span>
					</a>

				</li>

				<div class="topbar-divider d-none d-sm-block"></div>

				<!-- Nav Item - User Information -->
				<li class="nav-item dropdown no-arrow">
					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->first_name }} </span>
						<img class="img-profile rounded-circle" src="{{ asset('img/avatar.png') }}">
					</a>
					<!-- Dropdown - User Information -->
					<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
						<a class="dropdown-item" href="#">
							<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
							Profile
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
				<h1 class="h3 mb-0 text-gray-800">User Dashboard</h1>

			</div>


			<!-- Content Row -->

			<div class="row">

				<!-- Area Chart -->
				<div class="col-xl-4 col-lg-5">
					<div class="card shadow mb-4">
						<!-- Card Header - Dropdown -->
						<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
							<h6 class="m-0 font-weight-bold text-primary">Your Claims History</h6>
							<div class="dropdown no-arrow">
								<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
									<div class="dropdown-header">Options:</div>
									<a class="dropdown-item" href="{{ url('/claims/start') }}"><i class="fas fa-plus fa-sm"></i> Submit Claim</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Log</a>
								</div>
							</div>
						</div>
						<!-- Card Body -->
						<div class="card-body" style="font-size: 11px;">
							<ul class="list-group list-group-flush">

								@foreach ($claims as $num=>$claim)
								<li class="list-group-item">
									<div class="row">
										<div class="col-sm-5">
											<a href="?claim_number={{ $num }}">{{ $claim->departure->city }} <i class="fas fa-plane-departure fa-xs"></i> {{ $claim->arrival->city }}</a>
										</div>
										<div class="col-sm-3">{{ $claim->complaint }}</div>
										<div class="col-sm-4">{{ $claim->dof }}</div>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>


				<div class="col-xl-8 col-lg-7">

					<!-- Claim Details -->
					<div class="card shadow mb-4">
						@isset($claim_det)
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">{{ $claim_det->departure->name }} <i class="fas fa-plane-departure fa-xs"></i> {{ $claims_det->arrival->name }} ({{ $claim_det->dof }})</h6>
						</div>
						<div class="card-body">





							@if($claim_det->departure->country_id == 'NG' || $claim_det->arrival->country_id == 'NG')
							<h4 class="small font-weight-bold">Claims Processing <span class="float-right">100%</span></h4>
							<div class="progress mb-4">
								<div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
							</div>

							<div class="text-center">

								<a href="{{ asset('pdf/NigeriaClaims.pdf') }}">
									<img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{ asset('img/download-pdf.png') }}" alt=""></a>
							</div>
							@else
							<h4 class="small font-weight-bold">Claims Processing <span class="float-right">40%</span></h4>
							<div class="progress mb-4">
								<div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div>
								@if($claim_det->eligible == '1')
								<div class="eligible">
									<i class="fas fa-check fa-bg text-success"></i>
									<strong>Your claim is Eligible for Processing</strong>. The next Step is Validation</strong>, we will keep you posted on the status of that. Check back soon.</div>

								@else

								<div class="not-eligible">
									<li class="fas fa-times fa-bg text-danger"></i>This Claim cannot be Validated, it didn't pass Eligibility
								</div>

								@endif
							</div>
							<div class="text-center">
								<img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{ asset('img/world.png') }}" alt="">
							</div>
							@endif
							<p></p>
							<a target="_blank" rel="nofollow" href="#">Details &rarr;</a>
						</div>
						@endisset
					</div>

				</div>
			</div>

		</div>
		<!-- /.container-fluid -->

	</div>
	<!-- End of Main Content -->
	@endsection
