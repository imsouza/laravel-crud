@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-md-12 margin-tb p-3">

        <div class="pull-left">
            <a class="btn btn-success btn-sm btn-block" href="{{ route('products.create') }}"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Create New Product</a>
        </div>
    </div>
</div>

<form action="{{ route('products.search') }}" method="post" class="form input-group-prepend form-group">
    @csrf
    <div class="md-form active-pink-2 w-100 mb-0 mt-0">
      <input type="text" name="Filter" placeholder="Filter" aria-label="Filter" class="form-control" value="{{ $filters['filter'] ?? '' }}">
    </div>
</form>

<div class="text-center">
    @include('products.includes.alerts')
</div>

<table class="table table-sm table-striped table-bordered text-white">
    <thead class="thead-dark shadow">
        <tr class="table-header text-center ">
            <th class="font-weight-bold" scope="col">&numero;</th>
            <th class="font-weight-bold" scope="col">Name</th>
            <th class="font-weight-bold" scope="col">Price</th>
            <th class="font-weight-bold" scope="col">Description</th>
            <th class="font-weight-bold" scope="col">Action</th>
        </tr>
    </thead>

    @foreach ($products as $product)

    <tbody>
        <tr class="text-center">
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->description }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" enctype="multipart/form-data" class="form" method="POST">
                    <a class="btn btn-sm btn-info" href="{{ route('products.show',$product->id) }}"><i class="fa fa-eye"></i>&nbsp;&nbsp;Show</a>&nbsp;
                    <a class="btn btn-sm btn-warning" href="{{ route('products.edit',$product->id) }}"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>&nbsp;&nbsp;Delete</button>
                </form>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>

@if (isset($filters))
    {!! $products->appends($filters)->links(); !!} 
@else
    {!! $products->links() !!}
@endif

@endsection