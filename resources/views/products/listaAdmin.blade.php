@extends('layouts.app')
@section('content')



   @if (Session::has('message'))
       <div class="alert alert-info">{{ Session::get('message') }}</div>
   @endif
   <section class="container">
     <h3>LISTA ADMIN</h3>

       <a class="btn btn-info" href="{{ route('create') }}">Agregar</a>
        <table class="table table-dark">
       <thead class="thead-dark">
       <tr>
           <th scope="col">ID</th>
           <th scope="col">Nombre</th>
           <th scope="col">DESCRIPCION</th>
           <th scope="col">PRECIO</th>
           <th scope="col">TIPO</th>
           <th scope="col">PROMOCION</th>
           <th scope="col">CARROUSEL</th>
            <th scope="col">ADMIN</th>
       </tr>
       </thead>
       <tbody>
       @foreach($products as $product)
           <tr>
               <th scope="row">{{$product->id}}</th>
               <td>{{$product->name}}</td>
               <td>{{$product->description}}</td>
               <td>{{$product->price}}</td>
               <td>{{$product->type}}</td>
               <td>{{$product->promoted}}</td>
               <td>{{$product->slider}}</td>
               <td>
                <a href="{{ route('products.edit',$product->id) }}" class="btn btn-secondary"> EDITAR </a>
             		<form action="{{ route('products.destroy',$product->id) }}" method="POST">

             					 @csrf
             					 @method('PUT')
             					 @method('DELETE')

             			 <button type="submit" class="btn btn-danger text-uppercase">BORRAR </button>
             		</form>
               </td>
           </tr>
       @endforeach
       </tbody>
   </table>
   {{ $products->links() }}
   </section>
@endsection
