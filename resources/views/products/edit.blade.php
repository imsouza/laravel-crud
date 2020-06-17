@extends('products.layout')

@section('content')
<div class="row jumbotron jumbotron-fluid p-1 bg-dark">
  <div class="col-lg-12 margin-tb p-3">
      <div class="pull-left">
          <h3 class="text-white">Edit Product</h3>
          <a class="btn btn-primary btn-sm btn-block" href="{{ route('products.index') }}"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
      </div>
  </div>
</div>

<form action="{{ route('products.update',$product->id) }}" enctype="multipart/form-data" class="form" method="POST">
  @csrf
  @method('PUT')
 <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <div class="md-form">
          <input type="text" id="form1" name="name" value="{{ $product->name }}" class="form-control text-white" placeholder="Name">
          <label for="form1" class="text-white">Name</label>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <div class="md-form">
          <input type="text" id="form2" name="price" value="{{ $product->price }}" class="form-control text-white" placeholder="Price">
          <label for="form2" class="text-white">Price</label>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group">
        <div class="md-form">
          <label for="form3" class="text-white mt-2">Description</label>
          <textarea class="form-control text-white" id="form3" name="description" placeholder="Description">{{ $product->description }}</textarea>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <div class="custom-file text-white">
          <input type="file" name="image" id="customFileLang" value="{{ $product->image }}" placeholder="Image">
          <label class="custom-file-label bg-dark text-white" for="customFileLang">Image</label>
        </div>
      </div>
    </div>


    <div class="col-md-6 text-center">
      <button type="submit" class="btn btn-success btn-block btn-md"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
    </div>
</div>
</form>
@endsection