@extends('layouts.app')

<link rel="stylesheet" href="css/styleregister.css">
@section('content')



<div class="container-fluid">
    <h1 class="text-center">Productos</h1>
    <h4 class="text-center">Elaborados con materias primas frescas y de primera calidad le ofrecemos la mas amplia variedad de tortas y SARASA (TE LO DEJO A VOS MORE QUE SOS LA EXPERTA JE) </h4><br><br>
      <div id= "product-container" class="text-center">
       @foreach ($products as $product)
        <div class="col-md-4 product-grid">   
          <div class="image text-center">
            <a href="#"> 
             <img src={{$product->image}} alt={{$product->name}} class="img-thumbnail">
            </a>
           </div>
        <h4 class="text-center">{{$product->name}}</h4>        
        <h6 class="text-center">{{$product->description}}</h5>     
        <h4 class="text-center">Precio: ${{$product->price}}</h2>  
        <button type="button" class="btn btn-primary">COMPRAR</button> 
        </div>        
    @endforeach  
  
</div>
  

@endsection