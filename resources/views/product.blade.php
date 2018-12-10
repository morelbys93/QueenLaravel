@extends('layouts.app')

<link rel="stylesheet" href="css/styleregister.css">

@section('content')
  <div class="container-fluid">
    <h1 class="text-center">Productos</h1>
    <h4 class="text-center">Elaborados con materias primas frescas y de primera calidad le ofrecemos la mas amplia variedad de tortas y SARASA (TE LO DEJO A VOS MORE QUE SOS LA EXPERTA JE) </h4>
    <div id="product-container" class="row">
     @foreach ($products as $product)
      <article class="col-md-4 product-grid text-center">
        <div class="image">
          <a href="#">
            {{-- {{dd($product)}}; --}}
           <img src="{{ asset('/storage/uploads/' . $product->image) }}" alt="{{$product->name}}" class="img-thumbnail">
          </a>
        </div>
        <h4 class="text-center">{{$product->name}}</h4>
        <h6 class="text-center">{{$product->description}}</h6>
        <h4 class="text-center">Precio: ${{$product->price}}</h4>
        <button type="button" class="btn btn-primary">COMPRAR</button>
      </article>
      @endforeach
    </div>
  </div>
@endsection
