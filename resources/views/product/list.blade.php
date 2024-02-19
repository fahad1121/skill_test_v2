<div class="container mt-5">
        <h1 class="text-center">Product Items</h1>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity in stock</th>
                        <th>Price per item</th>
                        <th>Datetime submitted</th>
                        <th>Total Value</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product['productName'] }}</td>
                            <td>{{ $product['quantity'] }}</td>
                            <td>{{ $product['price'] }}</td>
                            <td>{{ $product['dateTimeSubmitted'] }}</td>
                            <td>{{ $product['totalValue'] }}</td>
                            <td><a href="{{ route('editProduct',$product['id']) }}" class="btn btn-primary editProduct" data-id="{{ $product['id'] }}">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
