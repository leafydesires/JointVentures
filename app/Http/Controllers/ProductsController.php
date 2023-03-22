<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function products()
    {
        return view('products.products');
    }

    //Single Product
     public function show(ProductsController $products) {
        return view('products.show', [
            'products' => $products
        ]);
    }
    
}
