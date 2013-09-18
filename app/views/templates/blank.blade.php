<!DOCTYPE html>
<html lang="en">

	@include('partials/header')

	<body data-template="blank">

		<div id="wrap">
			<div id="page">
				@yield('content')
			</div>
		</div>

		<div id="footer">
			Footer
		</div>

        @include('partials/bottom')

	</body>
</html>
