@extends('templates/default')

@section('content')

<div id="page">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-push-4">
				<form class="form-activate">

					<div class="row">
						<div class="col-md-12 text-center">
							<img src="{{ URL::asset('img/logo_large.png') }}" class="img-responsive" alt="CharitySound">
						</div>
					</div>

					<hr>

					<pre class="text-center">Activate Your Account</pre>

					<div class="form-group">
						<input type="password" class="form-control" placeholder="Choose a password">
					</div>

					<div class="form-group">
						<input type="password_confirmation" class="form-control" placeholder="Confirm password">
					</div>
		
					<div class="row">
						<div class="col-md-6">
							<label class="checkbox">
								<input type="checkbox" value="remember-me"> Remember me
							</label>
						</div>

						<div class="col-md-6">
							<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@stop