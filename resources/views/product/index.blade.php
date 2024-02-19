@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Product Form</h1>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <form action="" id="productForm">
                    <div class="form-group">
                        <label for="productName">Product Name</label>
                        <input type="text" class="form-control mt-1" id="productName" name="productName" placeholder="Enter Product Name here..." required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="productQuantityInStock">Product quantity in stock</label>
                        <input type="number" class="form-control mt-1" id="quantity" name="quantity" placeholder="Enter product stock here..." required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="pricePerItem">Price Per Item</label>
                        <input type="number" class="form-control mt-1" id="price" name="price" placeholder="Enter product price here..." required>
                    </div>
                    <button type="submit" class="btn btn-primary col-md-12 mt-3">Save</button>
                </form>
            </div>
        </div>
    </div>
    <div id="product_form_data"></div>

@endsection
