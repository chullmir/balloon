@extends('layouts.layout-pag')
@section('pageTitle','Perfil')
@section('titulo-pagina','Bienvenido XX')
@section('contenido')
<a href="/products/create" class="btn btn-info">Crear Producto</a>
<form action="{{route('logout')}}" method="post">
	@csrf
	<button type="submit" class="btn btn-danger">Cerrar Sesión</button>
</form>
@endsection
