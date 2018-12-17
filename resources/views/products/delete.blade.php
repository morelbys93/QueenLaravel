@extends('layouts.app')
@section('content')

	<h1>Listado de Productos</h1>
  <form action="/destroy/{{$product->id}}" method="POST">
		@csrf
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Imagen</th>
				<th>Precio</th>
        <th>Tipo</th>
        <th>Promocion</th>
        <th>Carrousel</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($products as $product)
				<tr>
					<td>{{ $product->name }}</td>
					<td>{{ $product->description }}</td>
					<td>{{ $product->image}}</td>
          <td>{{ $product->price}}</td>
          <td>{{ $product->type}}</td>
          <td>{{ $product->promoted}}</td>
          <td>{{ $product->slider}}</td>
					<td>
						<a class="btn btn-primary" href="/productos/{{$product->id}}/edit">
							<span class="fa fa-pencil"></span>
						</a>
						<form action="/productos/{{$product->id}}" method="POST">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger">
								<span class="fa fa-trash"></span>
							</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{{ $products->links() }}
@endsection
