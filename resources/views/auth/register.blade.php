@extends('layouts.app')

@section('content')
<div class="container my-5">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Register') }}</div>

				<div class="card-body">
					<form method="POST" action="{{ route('register') }}">
						@csrf

						@if ( request()->get('claim') )
						<div class="form-group row px-4">
							We have gotten your claim details. Kindly register below or <a class="px-1" href="{{ url('/login/'.request()->get('claim')) }}"> Login </a> to your account to view details of your Claim submission. Thank you for trusting Africlaim with your Claims processing.
							<input id="claim" type="hidden" class="form-control" name="claim" value="{{ request()->get('claim') }}" required autocomplete="claim">
						</div>
						@endif

						<div class="form-group row">
							<label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}</label>

							<div class="col-md-6">
								<input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

								@error('first_name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>

							<div class="col-md-6">
								<input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

								@error('last_name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

								@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

							<div class="col-md-6">
								<input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

								@error('phone')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>


						<div class="form-group row">
							<label for="residence" class="col-md-4 col-form-label text-md-right"> Country of Residence</label>

							<div class="col-md-6">
								<select name="residence" id="residence" class="form-control @error('residence') is-invalid @enderror">
									@foreach ($countries as $country)
									<option value="{{ $country->country_name }}">{{ $country->country_name }}</option>
									@endforeach
								</select>

								@error('residence')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

							<div class="col-md-6">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

								@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

							<div class="col-md-6">
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
							</div>
						</div>

						<div class="form-group row mb-0">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="btn btn-primary">
									{{ __('Register') }}
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
