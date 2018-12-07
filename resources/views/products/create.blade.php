
	<h1>Agregar Productos</h1>
{{--
	@if (count($errors))
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				<p>{{ $error }}</p>
			@endforeach
		</div>
	@endif

	--}}

	<form action="/Product" method="POST" enctype="multipart/form-data">
		@csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}" />
        </div>
        <div class="form-group">
            <label for="description">Descripcion</label>
            <input class="form-control" type="text" name="description" id="description"  value="{{old('description')}}"/>
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
