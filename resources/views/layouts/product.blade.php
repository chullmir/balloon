@extends('layouts.base')

@section('estructura')

<div class="container product-holder">
	<div class="row">
		<div class="col-12 col-md-6">
			<div class="imagen">
				@yield('imagen')
			</div>
		</div>
		
		<div class="col-12 col-md-6 descripcion">
			<div class="categorias">
				<div class="categoria btn btn-dark">{{$product->categorias}}</div>
			</div>
			<div class="nombre">
				{{$product->nombre}}
			</div>
			
			<div class="precio">
				$ {{$product->precio}}
			</div>
			<div class="marca">
				{{$product->marca}}
			</div>
			
			<form class="form-inline" action="">
				<div class="form-group">
					<input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad">
					<button type="submit" class="btn btn-primary">Comprar</button>
				</div>
			</form>


			

		</div>
	</div>




</div>



@endsection




{{-- <div class="row">
		
		<div class="col-12 col-md-6">
			<p class="codigo">Código: {{$product->codigo}}</p>
			
			<p class="stock">Stock: {{$product->stock}}</p>
			
			<p class="stock">Marca: </p>
			<a href="#" class="btn btn-info">Comprar</a>
			<a href="/products/{{$product->id}}/edit" class="btn btn-primary">Editar</a>
		</div>
	</div> --}}
{{-- @endsection --}}
