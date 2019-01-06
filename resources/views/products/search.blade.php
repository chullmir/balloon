@extends('layouts.layout-pag')
@section('pageTitle','Resultados de Búsqueda')
@section('titulo-pagina')
Resultados de: {{$queryString}}
@endsection
@section('csstype','listadoproductos')
@section('contenido')
	<div class="row">
	@foreach($products as $product)
		<div class="col-12 col-md-4 producto">
			<div class="card-producto">
				<div class="imagen">
					<a href="/products/{{$product->id}}">
						<img src="/img/producto/producto.jpg" alt="{{$product->nombre}}" class="img-fluid">
					</a>
				</div>
				<a href="/products/{{$product->id}}"><p class="product-title">{{$product->nombre}}</p></a>
				<p class="product-code">{{$product->codigo}}</p>
				<div class="botones">
					<a href="/products/{{$product->id}}" class="btn btn-info">Ver</a>
					<a href="/products/{{$product->id}}/edit" class="btn btn-secondary">Editar</a>
				</div>
				
			</div>
		</div>
	@endforeach
	</div>
	<a href="/products/create" class="btn btn-info">Crear</a>
@endsection