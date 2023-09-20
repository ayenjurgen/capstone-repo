<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\AppointmentLists;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DentalController extends Controller
{
    public function index()
    {
     return Product::all();
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response(
            [
                'message' => 'Product successfully created',
                'product' => $product,
                'id' => $product->id
            ],
            201
        );
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return response([
            'message' => 'Product successfully updated',
            'product' => $product,
            'id' => $product->id
        ]);
    }

    // public function destroy(Product $product)
    // {
    //     Product::destroy($product->product_id);

    //     return response([
    //         'message' => 'Product successfully deleted'
    //     ]);
    // }

}
