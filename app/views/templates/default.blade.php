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

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">CharitySound</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="#">Home</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Login</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="container">
			@yield('content')
		</div>

        <!-- build:js(public) js/libs.js -->
        <script src="/js/libs/jquery.js"></script>
        <script src="/js/libs/bootstrap.min.js"></script>
        <!-- endbuild -->

        <script src="/js/global.js"></script>

	</body>
</html>
