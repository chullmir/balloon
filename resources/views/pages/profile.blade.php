@extends('layouts.layout-pag')
@section('pageTitle','Perfil')
@section('titulo-pagina')
	<div>Bienvenido {{auth()->user()->nombre}}</div>
	{{-- <div class="btn btn-secondary ml-auto">Editar Datos</div> --}}
@endsection
@section('contenido')
<br>

<a href="/products/create" class="btn btn-info btn-block">Crear Producto</a>
<br>
<br>

<form action="{{route('logout')}}" method="post">
	@csrf
	<button type="submit" class="btn btn-danger btn-block">Cerrar Sesión</button>
</form>
@endsection
