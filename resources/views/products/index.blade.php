@extends('layouts.layout-pag')
@section('pageTitle','Catalogo de Productos')
@section('titulo-pagina','Catálogo de Productos')
@section('csstype','listadoproductos')
@section('contenido')
	<div class="row">
	@foreach($products as $product)
		<div class="col-12 col-md-4 producto">
			<i class="fas fa-heart"></i>
			<div class="card-producto">
				<div class="imagen">
					<a href="/products/{{$product->id}}">
						<img src="{{Storage::url($product->imagen)}}" alt="{{$product->nombre}}" class="img-fluid">
						{{-- <img src="/img/producto/producto.jpg" alt="{{$product->nombre}}" class="img-fluid"> --}}
					</a>
				</div>
				<a href="/products/{{$product->id}}"><p class="product-title">{{$product->nombre}}</p></a>
				<p class="categorias">{{$product->categorias}}</p>
				<p class="precio">${{$product->precio}}</p>
				<div class="botones">
					<a href="/products/{{$product->id}}" class="btn btn-dark">Ver</a>
					@if(!auth()->guest())
						<a href="/products/{{$product->id}}/edit" class="btn btn-secondary">Editar</a>
					@endif
				</div>
				
			</div>
		</div>
	@endforeach
	</div>
	<div class="pagination justify-content-center">
		{{$products->links()}}	
	</div>
@endsection