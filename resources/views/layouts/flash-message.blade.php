@if ($message = Session::get('success'))
<div class="alert alert-outline-success">
	
        <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-outline-danger">
	
        <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-outline-warning">
	
	<strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-outline-info">
	
	<strong>{{ $message }}</strong>
</div>
@endif
