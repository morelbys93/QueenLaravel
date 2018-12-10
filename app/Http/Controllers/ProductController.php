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

    public function create(Request $request){
      $this->validate($request,[
        'name'=>'required|string|max: 60|',
        'description'=>'required|max:255|',
        'image'=>'image',
        'price'=>'required',
        'type'=>'required',
        'promoted'=>'required',
        'slider'=> 'required',

      ]);

      $product= new Product;
        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->image = $request['image'];
        $product->price = $request['price'];
        $product->type = $request['type'];
        $product->promoted = $request['promoted'];
        $product->slider = $request['slider'];

      }

    public function MostrarProducto($id)
    {
        $product=Product::find($id);

        return view('products.vistaproducto', compact('product'));

    }
}
