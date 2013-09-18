@extends('templates/default')

@section('top')
	@include('partials/topnav')
@stop

@section('side')
	@include('partials/sidenav')
@stop

@section('content')

	Hello, {{ $user->email }}

	<div style="height: 1000px;">Top</div>

	Bottom

@stop