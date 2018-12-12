@extends('layouts.app')
<link rel="stylesheet" href="../css/styleregister.css">
@section('content')

<div class="container">
<div class="card">
	<div class="row">
		<aside class="col-sm-5 border-right">
<article class="gallery-wrap">
<div class="img-big-wrap">
  <div> <a href="#"><img src="{{ asset('/storage/uploads/' . $product->image) }}" ></a></div>
</div> <!-- slider-product.// -->
<div class="img-small-wrap">
  <div class="item-gallery"> </div>

</div> <!-- slider-nav.// -->
</article> <!-- gallery-wrap .end// -->
		</aside>
		<aside class="col-sm-7">
<article class="card-body p-5">
	<h3 class="title mb-3">{{$product->name}}</h3>

<p class="price-detail-wrap">
    <span> Precio</span><span class="num"></span>
    <span class="badge badge-success">
      ${{$product->price}}</span>
		</span>
	</p> <!-- price-detail-wrap .// -->
<dl class="item-property">
  <dt>Descripción</dt>
  <dd><p>{{$product->description}} </p></dd>
</dl>
<dl class="param param-feature">
  <dt>ID del producto</dt>
  <dd>#{{$product->id}}</dd>
</dl>  <!-- item-property-hor .// -->
<dl class="param param-feature">
  <dt>Categorización</dt>
  <dd>{{$product->type}}</dd>
</dl>  <!-- item-property-hor .// -->
<dl class="param param-feature">
  <dt>Formas de envío</dt>
  <dd>Retiro por local / Entrega en domicilio</dd>
</dl>  <!-- item-property-hor .// -->

<hr>
	<div class="row">
		<div class="col-sm-5">
			<dl class="param param-inline">
			  <dt>Cantidad: </dt>
			  <dd>
			  	<select class="form-control form-control-sm" name="cantidadComprada" style="width:70px;">
            @for($i=1; $i<21; $i++)
            <option value= {{$i}} > {{$i}} </option>
            @endfor
			  	</select>
			  </dd>
			</dl>  <!-- item-property .// -->
		</div> <!-- col.// -->

	</div> <!-- row.// -->
	<hr>
	<a href="#" class="btn btn-lg btn-primary text-uppercase"> COMPRAR </a>
	<a href="/edit/{{$product->id}}" class="btn btn-lg btn-warning text-uppercase"> Editar </a>
	</article> <!-- card-body.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
</div> <!-- card.// -->


</div>
<!--container.//-->





@endsection
