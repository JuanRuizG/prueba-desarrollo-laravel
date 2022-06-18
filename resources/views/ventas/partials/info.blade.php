@if(session()->has('info'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Mensaje</strong> {{session('info')}}
</div>
@endif

@if(session()->has('warning'))
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Mensaje</strong> {{session('warning')}}
</div>
@endif