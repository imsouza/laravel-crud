@extends('products.layout')



@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb p-3">
        <div class="pull-left">
            <h3 class="text-dark">Add New Product</h3>
            <a class="btn btn-primary" href="{{ route('products.index') }}"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
        </div>
    </div>
</div>

<hr>

<form action="{{ route('products.store') }}" enctype="multipart/form-data" method="POST">
  @csrf
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Price:</strong>
            <input type="text" name="price" class="form-control" placeholder="Price">
          </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Description:</strong>
            <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-success"><i class="fa fa-arrow-circle-up"></i>&nbsp;&nbsp;Submit</button>
    </div>
  </div>
</form>

@endsection