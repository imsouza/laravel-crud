@extends('products.layout')

@section('content')

<div class="row jumbotron jumbotron-fluid p-1 bg-dark">
    <div class="col-lg-12 margin-tb p-3">
        <div class="pull-left">
            <h3 class="text-white">Add New Product</h3>
            <a class="btn btn-sm btn-primary btn-block" href="{{ route('products.index') }}"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
        </div>
    </div>
</div>

<form action="{{ route('products.store') }}" enctype="multipart/form-data" class="form" method="POST">
  @csrf
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <div class="md-form">
          <input type="text" id="form1" name="name" value="{{ old('name') }}" class="form-control text-white" placeholder="SNES" required>
          <label for="form1" class="text-white">Name</label>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <div class="md-form">
          <input type="text" id="form2" name="price" value="{{ old('price') }}" class="form-control text-white" placeholder="148.22" required>
          <label for="form2" class="text-white">Price</label>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group">
        <div class="md-form">
          <label for="form3" class="text-white mt-2">Description</label>
          <textarea type="text" id="form3" name="description" value="{{ old('description') }}" class="form-control text-white" placeholder="16-bit home video game console" required></textarea>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <div class="custom-file text-white">
          <input type="file" name="image" id="customFileLang" placeholder="Image">
          <label class="custom-file-label bg-dark text-white" for="customFileLang">Image</label>
        </div>
      </div>
    </div>

    <div class="col-md-6 text-center">
      <button type="submit" class="btn btn-success btn-block btn-md"><i class="fa fa-arrow-circle-up"></i>&nbsp;&nbsp;Submit</button>
    </div>
</div>
</form>

@endsection