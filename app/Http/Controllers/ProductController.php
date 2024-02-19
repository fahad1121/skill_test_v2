<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index');
    }

    public function save(Request $request)
    {
        $products = json_decode(Storage::disk('local')->get('products.json'),true);
        if(is_null($products)){
            $id = 0;
        }
        else{
            $id = count($products);
        }

        $product = [
            'id'    =>  $id,
            'productName'   =>  $request->productName,
            'quantity'   =>  $request->quantity,
            'price'   =>  $request->price,
            'dateTimeSubmitted'   =>  Carbon::now()->toDateTimeString(),
            'totalValue'   =>  $request->quantity * $request->price,
        ];

        $products[] = $product;

        Storage::disk('local')->put('products.json',json_encode($products));

        return view('product.list',compact('products'));
    }

    public function edit($productId)
    {
        $products = json_decode(Storage::disk('local')->get('products.json'),true);
        foreach ($products as $product){
            if($product['id'] == $productId){
                return view('product.edit',compact('product'));
            }
        }
    }

    public function update(Request $request)
    {
        $products = json_decode(Storage::get('products.json'),true);
        foreach ($products as &$product){
            if($product['id'] == $request['productId']){
                $product['productName'] = $request['productName'];
                $product['quantity'] = $request['quantity'];
                $product['price'] = $request['price'];
                break;
            }
        }

        $updateJsonProducts = json_encode($products,JSON_PRETTY_PRINT);

        Storage::put('products.json',$updateJsonProducts);

        return redirect()->to('/')->with('success','Product data updated successfully!');
    }
}
