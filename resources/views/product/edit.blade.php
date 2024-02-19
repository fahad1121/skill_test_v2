@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Edit Product Form</h1>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{ route('updateProduct') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="productId" value="{{ $product['id'] }}">
                    <div class="form-group">
                        <label for="productName">Product Name</label>
                        <input type="text" class="form-control mt-1" id="productName" name="productName" value="{{ $product['productName'] }}" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="productQuantityInStock">Product quantity in stock</label>
                        <input type="number" class="form-control mt-1" id="quantity" name="quantity" value="{{ $product['quantity'] }}" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="pricePerItem">Price Per Item</label>
                        <input type="number" class="form-control mt-1" id="price" name="price" value="{{ $product['price'] }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary col-md-12 mt-3">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection
