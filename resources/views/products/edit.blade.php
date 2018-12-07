@extends('app')
@section('main')
	<h1>Editar Productos</h1>
	{{--
	@if (count($errors))
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				<p>{{ $error }}</p>
			@endforeach
		</div>
	@endif


		$errors->has('title')
		$errors->first('title')
		$errors->get('title')
	--}}

	<form action="/Product/{{$movie->id}}" method="POST">
		@csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre</label>
            <input class="form-control" type="text" name="name" id="name" value="{{old('name',  $product->name)}}" />
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
            <input class="form-control" type="text" name="rating" id="rating"  value="{{old('rating',  $product->description)}}"/>
        </div>
        <div class="form-group">
            <label for="awards">Premios</label>
            <input class="form-control" type="text" name="awards" id="awards"  value="{{old('image',  $product->image)}}"/>
        </div>
        <div class="form-group">
            <label for="length">Duración</label>
            <input class="form-control" type="text" name="length" id="length"  value="{{old('length',  $product->length)}}"/>
        </div>
        <div class="form-group">
            <label for="release_date">Fecha de Estreno</label>
            <input class="form-control" type="date" name="release_date" id="release_date"  value="{{old('release_date',  $product->release_date->format('Y-m-d'))}}">
        </div>
        <div class="form-group">
        	<button class="btn btn-primary" type="submit" name="button">Agregar</button>
        </div>
    </form>
@endsection
