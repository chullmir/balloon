@extends('layouts.layout-pag')
@section('pageTitle','Cargar Producto')
@section('titulo-pagina','Cargar un Producto')
@section('contenido')
	<div class="col">
		
		@if(count($errors))
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $key => $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<form action="/products" class="formulario" method="post">
			@csrf
			<div class="form-group">
				<label for="codigo">Código de Producto</label>
				<input type="text" name="codigo" id="codigo" class="form-control {{$errors->has('codigo') ? 'is-invalid' : ''}}" placeholder="Código" value="{{old('codigo')}}">
			</div>
			

			<div class="form-group">
				<label for="nombre">Nombre del Producto</label>
				<input type="text" name="nombre" id="nombre" class="form-control {{$errors->has('nombre') ? 'is-invalid' : ''}}" placeholder="Nombre del Producto" value="{{old('nombre')}}">
			</div>

			<div class="form-group">
				<label for="stock">Stock</label>
				<input type="number" name="stock" id="stock" class="form-control {{$errors->has('stock') ? 'is-invalid' : ''}}" placeholder="Stock" value="{{old('stock')}}">
			</div>

			<div class="form-group">
				<label for="tipo">Tipo de Producto</label>
				<input type="text" name="tipo" id="tipo" class="form-control {{$errors->has('tipo') ? 'is-invalid' : ''}}" placeholder="Tipo" value="{{old('tipo')}}">
			</div>

			<div class="form-group">
				<label for="precio">Precio</label>
				<input type="number" name="precio" id="precio" class="form-control {{$errors->has('precio') ? 'is-invalid' : ''}}" placeholder="Precio" value="{{old('precio')}}">
			</div>

			<div class="form-group">
				<label for="categorias">Categorias</label>
				<input type="text" name="categorias" id="categorias" class="form-control {{$errors->has('categorias') ? 'is-invalid' : ''}}" placeholder="Categorias" value="{{old('categorias')}}">
			</div>

			<div class="form-group">
				<label for="marca">Marca</label>
				<input type="text" name="marca" id="marca" class="form-control {{$errors->has('marca') ? 'is-invalid' : ''}}" placeholder="Marca" value="{{old('marca')}}">
			</div>

			<input type="submit" value="Cargar Producto" class="btn btn-info btn-block">
			<a href="{{route('products.index')}}" class="btn btn-secondary btn-block">Volver</a>
		</form>
	</div>
@endsection