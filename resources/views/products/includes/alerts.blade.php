@if ($message = Session::get('success'))
<div class="alert alert-success alert-block alert-dismissible fade show">
	<button type="button" class="close" data-dismiss="alert" style="outline: none;">&nbsp;×</button>	
  <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('danger'))
<div class="alert alert-danger alert-block alert-dismissible fade show">
	<button type="button" class="close" data-dismiss="alert" style="outline: none;">&nbsp;×</button>	
  <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block alert-dismissible fade show">
	<button type="button" class="close" data-dismiss="alert" style="outline: none;">&nbsp;×</button>	
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show">
	<button type="button" class="close" data-dismiss="alert" style="outline: none;">&nbsp;×</button>	
	Please check the form below for errors
</div>
@endif
