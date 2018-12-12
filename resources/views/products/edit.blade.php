@extends('layouts.app')
	<h1>Editar Productos</h1>
	{{--
	@if (count($errors))
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				<p>{{ $error }}</p>
			@endforeach
		</div>
	@endif


		$errors->has('name')
		$errors->first('name')
		$errors->get('name')
	--}}

	<form action="/edit/{{$product->id}}" method="POST">
		@csrf
        @method('PUT')
					<div class="form-group">
							<label for="name">Nombre</label>
							<input class="form-control" type="text" name="name" id="name" value="{{old('name',  $product->name)}}" />
					</div>
	        <div class="form-group">
	            <label for="description">Descripcion</label>
	            <input class="form-control" type="text" name="description" id="description"  value="{{old('description', $product->description)}}"/>
	        </div>
					<div class="form-group">
				    <label for="description">Descripcion del Producto</label>
				    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
	        <div class="form-group">
	        	<button class="btn btn-primary" type="submit" name="button">Modificar Producto</button>
	        </div>
	    </form>

@endsection
