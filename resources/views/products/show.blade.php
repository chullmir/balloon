@extends('layouts.layout-pag')
@section('pageTitle','Ver Producto')
@section('titulo-pagina')
{{$product->nombre}}
@endsection
@section('contenido')
	<div class="row">
		<div class="col-12 col-md-6">
			<div class="imagen">
				<img src="/img/producto/producto.jpg" alt="">
			</div>
		</div>
		<div class="col-12 col-md-6">
			<p class="codigo">Código: {{$product->codigo}}</p>
			<p class="precio">Precio: {{$product->precio}}</p>
			<p class="stock">Stock: {{$product->stock}}</p>
			<p class="stock">Categorías: {{$product->categorias}}</p>
			<p class="stock">Marca: {{$product->marca}}</p>
			<a href="#" class="btn btn-info">Comprar</a>
			<a href="/products/{{$product->id}}/edit" class="btn btn-primary">Editar</a>
		</div>
	</div>
@endsection
