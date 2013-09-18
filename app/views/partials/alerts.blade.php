@if (Session::has('alert'))
	<div class="alert alert-dismissable alert-{{ Session::get('alert')[0] }}">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{ Session::get('alert')[1] }}
	</div>
@endif