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

      $product= new Product;

      $product->name = $request['name'];
      $product->description = $request['description'];
      $product->image = $request->file('image')->store('products');
      $product->price = $request['price'];
      $product->type = $request['type'];
      $product->promoted = $request['promoted'];
      $product->slider = $request['slider'];
      $product->save();

      $mensaje = "producto guradado con éxito";

      return redirect("/productos");

      }

    public function MostrarProducto($id)
    {
      $product=Product::find($id);
      return view('products.vistaproducto', compact('product'));

    }
    public function edit($id)
    {   $product=Product::find($id);
      return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
      $request -> validate([

          'name'=>'required|string|max:60|',
          'description'=>'required|max:255|',
          'image'=>'image',
          'price'=>'required',
          'type'=>'required',
          'promoted'=>'required',
          'slider'=> 'required',
        ]);
        $product->update($request->all());
        return redirect()->route('lista');

    }

    public function destroy(Product $product)
    {
    	$product->delete();
    	return redirect()->route('lista');
    }
    public function lista()
     {
       $products = Product::Paginate(10);
       return view('products.listaAdmin', ['products'=>$products]);

     }

}
