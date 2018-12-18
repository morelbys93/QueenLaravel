@extends('layouts.app')
@section('content')

	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
 @endif

	<form class="container" action="/create" method="POST" enctype="multipart/form-data">
		@csrf
			<h3>Agregar Productos</h3>
        <div class="form-group">
            <label for="name">Nombre</label>
            <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}" />
        </div>
        <div class="form-group">
            <label for="description">Descripcion</label>
            <textarea class="form-control" type="text" name="description" id="description"  value="">{{old('description')}}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Imagen</label>
            <input class="form-control" type="file" name="image" id="image"  value="{{old('image')}}"/>
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
@endsection
