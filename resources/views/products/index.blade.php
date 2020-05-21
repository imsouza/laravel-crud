@extends('products.layout')

@section('content')

<div class="row jumbotron jumbotron-fluid p-1">
    <div class="col-lg-12 margin-tb p-3">
        <div class="pull-left">
            <h3 class="text-dark">Products CRUD</h3>
            <form action="{{ route('products.search') }}" method="post" class="form form-inline input-group">
                @csrf
                <input type="text" name="filter" placeholder="Search" class="form-control mb-1" value="{{ $filters['filter'] ?? '' }}">
                <button type="submit" class="btn btn-info mb-1"><i class="fa fa-search"></i></button>
            </form>
            <a class="btn btn-success btn-block" href="{{ route('products.create') }}"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Create New Product</a>
        </div>
        <div class="pull-right">
            @include('products.includes.alerts')
        </div>
    </div>
</div>

<table class="table table-bordered table-striped table-hover">
    <thead class="thead-dark">
        <tr class="table-header text-center">
            <th>&numero;</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th width="315px">Action</th>
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
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}"><i class="fa fa-eye"></i>&nbsp;&nbsp;Show</a>
                    <a class="btn btn-warning" href="{{ route('products.edit',$product->id) }}"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp;&nbsp;Delete</button>
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