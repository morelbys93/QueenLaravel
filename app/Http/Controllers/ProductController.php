<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function show()
    {
        return view('products.create');
    }
    public function show1()
    {
        $products=Product::all();

        return view('product', compact('products'));
    }

    public function MostrarProducto($id)
    {
        $product=Product::find($id);

        return view('products.vistaproducto', compact('product'));
        
    }
}
