<div id="topnav" class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">
			<img src="img/logo.png" alt="CharitySound">
			<i class="icon-lock"></i>
		</a>
	</div>
	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li><a href="{{ URL::route('home') }}">Home</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="{{ URL::route('logout') }}">Logout</a></li>
		</ul>
	</div>
</div>