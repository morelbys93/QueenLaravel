@extends('layouts.app')
@section('content')

	@if (count($errors))
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				<p>{{ $error }}</p>
			@endforeach
		</div>
	@endif

	<form class="container" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data" method="POST">

		@csrf
		@method('PATCH')
				<h3>Editar Productos</h3>
					<div class="form-group">
							<label for="name">Nombre del producto</label>
							<input class="form-control" type="text" name="name" id="name" value="{{old('name',  $product->name)}}" />
					</div>
	        <div class="form-group">
	            <label for="description">Descripcion</label>
	            <textarea class="form-control" type="text" name="description" id="description"  value=""> {{ old('description', $product->description) }} </textarea>
	        </div>
	        <div class="form-group">
	            <label for="image">Imagen</label>
	            <input class="form-control" type="file" name="image" id="image"/>
	        </div>
	        <div class="form-group">
	            <label for="price">Precio</label>
	            <input class="form-control" type="text" name="price" id="price"  value="{{old('price', $product->price)}}"/>
	        </div>
	        <div class="form-group">
	            <label for="type">Tipo</label>
	            <input class="form-control" type="number" name="type" id="type"  value="{{old('type', $product->type)}}"/>
	        </div>
	        <div class="form-group">
	            <label for="promoted">Promocion</label>
	            <input class="form-control" type="number" name="promoted" id="promoted" value="{{old('promoted', $product->promoted)}}"/>
	        </div>
	        <div class="form-group">
	            <label for="slider">Carrousel</label>
	            <input class="form-control" type="number" name="slider" id="slider" value="{{old('slider', $product->slider)}}"/>
	        </div>

	        	<button class="btn btn-primary" type="submit">Modificar Producto</button>


@endsection
