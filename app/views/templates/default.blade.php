<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="../../assets/ico/favicon.png">

		<title>Charity Sound</title>

		<link rel="stylesheet" href="{{ asset('css/global.css') }}">

		<!--[if lt IE 9]>
			<script src="{{ asset('js/libs/html5shiv.js') }}"></script>
			<script src="{{ asset('js/libs/respond.min.js') }}"></script>
		<![endif]-->
	</head>

	<body>

		@yield('top')

		@yield('side')

		@yield('page')

		@yield('content')
		
		<div id="footer" class="navbar-fixed-bottom">
			
		</div>

        <!-- build:js(public) js/libs.js -->
        <script src="/js/libs/jquery.js"></script>
        <script src="/js/libs/bootstrap.min.js"></script>
        <!-- endbuild -->

        <script src="/js/global.js"></script>

	</body>
</html>
