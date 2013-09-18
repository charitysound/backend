@extends('templates/default')

@section('content')

<div id="page">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-push-4">

				<form class="form-signin" action="{{ URL::route('postLogin') }}" method="POST">
					<div class="row">
						<div class="col-md-12 text-center">
							<img src="{{ URL::asset('img/logo_large.png') }}" class="img-responsive" alt="CharitySound">
						</div>
					</div>

					<hr>

					<div class="form-group {{ !$errors->first('username') ?: 'has-error' }}">
						{{ $errors->first('username', '<label class="control-label">:message</label>') }}
						<input name="username" type="text" class="form-control" value="{{ Input::old('username') }}" placeholder="Username or email address" autofocus>
					</div>

					<div class="form-group {{ !$errors->first('password') ?: 'has-error' }}">
						{{ $errors->first('password', '<label class="control-label">:message</label>') }}
						<input name="password" type="password" class="form-control" placeholder="Password">
					</div>
		
					<div class="row">
						<div class="col-md-6">
							<label class="checkbox">
								<input name="remember-me" type="checkbox"> Remember me
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