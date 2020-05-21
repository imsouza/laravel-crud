@extends('products.layout')

@section('content')

<div class="row jumbotron jumbotron-fluid p-1">
    <div class="col-lg-12 margin-tb p-3">
        <div class="pull-left">
            <h3 class="text-dark">Add New Product</h3>
            <a class="btn btn-primary" href="{{ route('products.index') }}"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
        </div>
    </div>
</div>

<form action="{{ route('products.store') }}" enctype="multipart/form-data" method="POST">
  @csrf
  <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="SNES" required>
        </div>
      </div>

      <div class="col-md-6">
          <div class="form-group">
            <strong>Price:</strong>
            <input type="text" name="price" class="form-control" value="{{ old('price') }}" placeholder="148.22" required>
          </div>
      </div>

      <div class="col-md-12">
          <div class="form-group">
            <strong>Description:</strong>
            <textarea class="form-control" style="height:150px" name="description" value="{{ old('description') }}" placeholder="16-bit home video game console" required></textarea>
          </div>
      </div>

      <div class="col-md-6">
          <div class="form-group">
            <strong>Image:</strong><br>
            <input type="file" name="image" placeholder="Image">
          </div>
      </div>

      <div class="col-md-12 text-center">
          <button type="submit" class="btn btn-success w-25"><i class="fa fa-arrow-circle-up"></i>&nbsp;&nbsp;Submit</button>
    </div>
  </div>
</form>

@endsection