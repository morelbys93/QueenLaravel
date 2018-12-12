@extends('layouts.app')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
 @endif
 {{-- {{$mensaje}} --}}

	<form action="/create" method="POST" enctype="multipart/form-data">
		@csrf
		<h1>Agregar Productos</h1>
</form>
		<div class="form-group">

			<div class="form-group row">
				<label for="name"> Nombre del producto </label>
				<input type="text" class="form-control" id="name" placeholder="Ingrese aca el nombre del producto">
				</div>
  		</div>
        <div class="form-group">
            <label for="description">Descripcion</label>
            <input class="form-control" type="text" name="description" id="description"  value="{{old('description')}}"/>
        </div>
        <div class="form-group">
            <label for="image">Imagen</label>
            <input class="form-control" type="file" name="image" id="image"
        </div>
        <div class="form-group">
            <label for="price">Precio</label>
            <input class="form-control" type="text" name="price" id="price"  value="{{old('price')}}"/>
        </div>
        <div class="form-group">
            <label for="type">Tipo</label>
            <input class="form-control" type="number" name="type" id="type"  value="{{old('type')}}"/>
        </div>
        <div class="form-group">
            <label for="promoted">Promocion</label>
            <input class="form-control" type="number" name="promoted" id="promoted">
        </div>
        <div class="form-group">
            <label for="slider">Carrousel</label>
            <input class="form-control" type="number" name="slider" id="slider">
        </div>
        <div class="form-group">
        	<button class="btn btn-primary" type="submit" name="button">Agregar</button>
        </div>
    </form>
