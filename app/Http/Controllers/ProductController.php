<?php

namespace App\Http\Controllers;

use App\Http\Resources\Products\ProductCollection;
use App\Http\Resources\Products\ProductResource;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();

        return new ProductCollection($products);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return new ProductResource($product);
    }


}
