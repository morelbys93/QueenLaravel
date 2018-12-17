<title> QueenCandy | Productos ~ </title>
@extends('layouts.app')

<link rel="stylesheet" href="css/styles.css">

@section('content')
  <div class="container-fluid">
    <h1 class="text-center">Productos</h1>
<<<<<<< HEAD
    <h4 class="text-center">Elaborados con materias primas frescas y de primera calidad le ofrecemos la mas amplia variedad de tortas </h4>
=======
    <h4 class="text-jutify">En nuestra oferta culinaria, de elaboración propia y creativa, siempre prima la calidad: productos frescos de temporada que llegan a nuestra cocina directamente desde la huerta, la granja o el mar. Fomentamos el empleo de productos autóctonos y locales en una apuesta por el medio ambiente y la calidad que ofrecen nuestros proveedores. Nuestros platos se basan en una renovada lectura del tradicional recetario de la cocina tradicional con toques vanguardistas que les aportan modernidad y sorprenden al comensal. Para acompañar a cada uno de nuestros platos disponemos de una cuidada selección de vinos y les ofrecemos también un dulce surtido de postres caseros. </h4>
>>>>>>> 0fcb04205710b251801aab45121f5bc4f1f88fea
    <div id="product-container" class="row">
     @foreach ($products as $product)
      <article class="col-md-4 product-grid text-center">
        <div class="image">
          <a href="/productos/{{$product->id}}">
            {{-- {{dd($product)}}; --}}
           <img src="{{ asset('/storage/uploads/' . $product->image) }}" alt="{{$product->name}}" class="img-thumbnail">
          </a>
        </div>
        <h4 class="text-center">{{$product->name}}</h4>
        <h6 class="text-center">{{$product->description}}</h6>
        <h4 class="text-center">Precio: ${{$product->price}}</h4>
        <button type="button" class="btn btn-primary">COMPRARLO</button>
        <a href="/edit/{id}" class="btn btn-lg btn-warning text-uppercase"> Editar </a>
        {{-- <button type="button" class="btn btn-danger">Eliminar</button> --}}
        <a href="/destroy/{id}" class="btn btn-lg btn-danger text-uppercase"> Eliminar </a>
      </article>
      @endforeach
    </div>
  </div>
@endsection
