<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products=Product::all();

        return view('product', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request){
      $this->validate($request, [
        'name'=>'required|string|max:60|',
        'description'=>'required|max:255|',
        'image'=>'image',
        'price'=>'required',
        'type'=>'required',
        'promoted'=>'required',
        'slider'=> 'required',
      ]);

      $path = $request->file('image')->store('uploads', 'public');
      //Hay que crear el simlink a storage usando: php artisan storage:link

      $product= new Product;

      $product->name = $request['name'];
      $product->description = $request['description'];
      $product->image = $path;
      $product->price = $request['price'];
      $product->type = $request['type'];
      $product->promoted = $request['promoted'];
      $product->slider = $request['slider'];
      $product->save();

      $mensaje = "producto guradado con éxito";

      return redirect("/create");

      }

    public function MostrarProducto($id)
    {
        $product=Product::find($id);
        return view('products.vistaproducto', compact('product'));

    }
    public function edit()
    {
        return view('products.edit');
    }
}
