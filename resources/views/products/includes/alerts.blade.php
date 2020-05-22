@if ($message = Session::get('success'))
<div class="alert mb-0 alert-success alert-block alert-dismissible fade show">
	<button type="button" class="close mb-0" data-dismiss="alert" style="outline: none;">&nbsp;×</button>	
  <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('danger'))
<div class="alert mb-0 alert-danger alert-block alert-dismissible fade show">
	<button type="button" class="close mb-0" data-dismiss="alert" style="outline: none;">&nbsp;×</button>
  <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('warning'))
<div class="alert mb-0 alert-warning alert-block alert-dismissible fade show">
	<button type="button" class="close mb-0" data-dismiss="alert" style="outline: none;">&nbsp;×</button>	
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($errors->any())
<div class="alert mb-0 alert-danger alert-dismissible fade show">
	<button type="button" class="close mb-0" data-dismiss="alert" style="outline: none;">&nbsp;×</button>	
	Please check the form below for errors
</div>
@endif
