@extends('products.layout')

@section('content')
<div class="row jumbotron jumbotron-fluid p-1 bg-dark">
  <div class="col-lg-12 margin-tb p-3">
      <div class="pull-left">
          <h3 class="text-white">Show Product</h3>
          <a class="btn btn-primary btn-sm btn-block" href="{{ route('products.index') }}"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
      </div>
  </div>
</div>

<div class="row text-white text-justify">
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

  <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        @if ($product->image)
          <strong>Image:</strong><br>
          <img src='{{ url("storage/"."$product->image") }}' width="350px;" alt="{{ $product->name }}"  class="img-fluid img-responsive">
        @endif
      </div>
  </div>
</div>

@endsection