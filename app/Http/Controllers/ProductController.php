<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreUpdateProductRequest;

class ProductController extends Controller
{
  protected $request, $user;
  protected $repository;

  public function __construct (Request $request, Product $product) {
    $this->repository = $product;
    $this->request = $request;
  }

/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
  public function index()
  {
    $products = Product::latest()->paginate(4);
    return view('products.index',compact('products'))->with('i', (request()->input('page', 1) - 1) * 4);
  }


/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
  public function create()
  {
    return view('products.create');
  }


/**
 * Store a newly created resource in storage.
 *
 * @param  App\Http\Requests\StoreUpdateProductRequest  $request
 * @return \Illuminate\Http\Response
 */
  public function store(StoreUpdateProductRequest $request)
  {
    $data = $request->only('name', 'description', 'price');

    if ($request->hasFile('image') && $request->image->isValid()) {
      $imagePath = $request->image->store('products');
      $data['image'] = $imagePath;
    }

    $this->repository->create($data);
    return redirect()->route('products.index')->with('success','Product created successfully.');
  }


/**
 * Display the specified resource.
 *
 * @param  \App\Product  $product
 * @return \Illuminate\Http\Response
 */
  public function show($id)
  {
    if (!$product = $this->repository->find($id)) {
      return redirect()->back();
    }
    return view('products.show',compact('product'));
  }


/**
 * Show the form for editing the specified resource.
 *
 * @param  int $id
 * @return \Illuminate\Http\Response
 */
  public function edit($id)
  {
    if (!$product = $this->repository->find($id)) {
      return redirect()->back();
    }

    return view('products.edit',compact('product'));
  }


/**
 * Update the specified resource in storage.
 *
 * @param  App\Http\Requests\StoreUpdateProductRequest  $request $id
 * @param  \App\Product  $product
 * @return \Illuminate\Http\Response
 */
  public function update(StoreUpdateProductRequest $request, $id)
  {
    if (!$product = $this->repository->find($id)) {
      return redirect()->back();
    }

    $data = $request->all();

    if ($request->hasFile('image') && $request->image->isValid()) {
      if ($product->image && Storage::exists($product->image)) {
        Storage::delete($product->image);
      }

      $imagePath = $request->image->store('products');
      $data['image'] = $imagePath;
    }

    $product->update($data);

    return redirect()->route('products.index')->with('warning','Product updated successfully');
  }


/**
 * Remove the specified resource from storage.
 *
 * @param  int $id
 * @return \Illuminate\Http\Response
 */
  public function destroy($id)
  {
    if (!$product = $this->repository->find($id)) {
      return redirect()->back();
    }
    $product->delete();
    return redirect()->route('products.index')->with('danger','Product deleted successfully');
  }


/**
 * Search Products.
 */
  public function search(Request $request)
  {
    $filters = $request->except('_token');
    $products = $this->repository->search($request->filter);
    return view('products.index', [
      'products' => $products,
      'filters' => $filters,
    ])->with('i', (request()->input('page', 1) - 1) * 4);
  }
}
