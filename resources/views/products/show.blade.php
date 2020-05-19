@extends('products.layout')

@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb p-3">
      <div class="pull-left">
          <h3 class="text-dark">Show Product</h3>
          <a class="btn btn-primary" href="{{ route('products.index') }}"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
      </div>
  </div>
</div>

<hr>

<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
          <strong>Name:</strong>
          {{ $product->name }}
      </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
          <strong>Price:</strong>
          {{ $product->price }}
      </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
          <strong>Description:</strong>
          {{ $product->description }}
      </div>
  </div>
</div>

@endsection