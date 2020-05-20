@extends('products.layout')

@section('content')
<div class="row jumbotron jumbotron-fluid p-1">
  <div class="col-lg-12 margin-tb p-3">
      <div class="pull-left">
          <h3 class="text-dark">Edit Product</h3>
          <a class="btn btn-primary" href="{{ route('products.index') }}"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
      </div>
  </div>
</div>

<form action="{{ route('products.update',$product->id) }}" enctype="multipart/form-data" class="form" method="POST">
  @csrf
  @method('PUT')
 <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name" required>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Price:</strong>
            <input type="text" name="price" value="{{ $product->price }}" class="form-control" placeholder="Price" required>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $product->description }}</textarea>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12  col-md-12">
      <div class="form-group">
        <strong>Image:</strong><br>
        <input type="file" name="image" value="{{ $product->image }}" placeholder="Image">
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
      <button type="submit" class="btn btn-success w-25"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
    </div>
</div>
</form>
@endsection