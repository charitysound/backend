@extends('templates/default')

@section('top')
	@include('partials/topnav')
@stop

@section('side')
	@include('partials/sidenav')
@stop

@section('content')

	<div id="page" class="col-sm-9 col-lg-10">
		
		Home

		<hr>

		{{ $user->email }}

		<div style="height: 1000px;"></div>

		Yo

	</div>

@stop