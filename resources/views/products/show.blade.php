@extends('layouts.product')
@section('pageTitle','Ver Producto')

@section("imagen")
	<img src="{{Storage::url($product->imagen)}}" alt="">
@endsection







	