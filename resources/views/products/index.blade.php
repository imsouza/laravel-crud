@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb p-3">
        <div class="pull-left">
            <h3 class="text-dark">Laravel CRUD</h3>
            <a class="btn btn-success" href="{{ route('products.create') }}"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Create New Product</a>
        </div>
    </div>
</div>

@include('products.includes.alerts')

<table class="table table-bordered">
    <tr>
        <th>&numero;</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th width="315px">Action</th>
    </tr>

    @foreach ($products as $product)

    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->description }}</td>
        <td>
            <form action="{{ route('products.destroy',$product->id) }}" enctype="multipart/form-data" class="form" method="POST">
                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}"><i class="fa fa-eye"></i>&nbsp;&nbsp;Show</a>
                <a class="btn btn-warning" href="{{ route('products.edit',$product->id) }}"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp;&nbsp;Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $products->links(); !!} 

@endsection