@extends('layouts.base')
@section('pageTitle','Balloon City')
@section('estructura')
	{{-- INICIO CARROUSEL --}}

	<div class="container-fluid">
		<div id="carouselIndicators" class="carousel slide d-none d-md-block" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselIndicators" data-slide-to="1"></li>
				<li data-target="#carouselIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="img/slider-home/slider-1.jpg" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/slider-home/slider-2.jpg" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/slider-home/slider-3.jpg" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	{{-- FIN CARROUSEL --}}



	<div class="container listadoproductos">
		<h2 class="title">Productos</h2>
		<div class="row">
				@foreach($products as $product)
					<div class="col-6 col-lg-4 producto">
						<div class="img-producto">
							<a href="/products/{{$product->id}}">
								<img src="{{Storage::url($product->imagen)}}" alt="" width="300px" class="img-fluid">
							</a>
						</div>

						<a href="/products/{{$product->id}}" class="product-title">{{$product->nombre}}</a>
						<p class="product-price">${{$product->precio}}</p>
						@if($product->sale)
							<div class="sale">
								<i class="fas fa-piggy-bank"></i>
							</div>
						@endif
						
						<a href="/products/{{$product->id}}" class="btn btn-dark">Comprar</a>

						<!-- Button trigger modal -->
						<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#productModal">
							Ver
						</button>
						<!-- Modal -->
						<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="productModalLabel">{{$product->nombre}}</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										

										<div class="img-producto">
											<a href="/products/{{$product->id}}">
												<img src="/img/producto/producto.jpg" alt="" class="img-fluid">
											</a>
										</div>




									</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
										</div>
									</div>
								</div>
							</div>



					</div>
				@endforeach
		</div>


		{{-- <h2>Sale</h2>
		<div class="row">
				@foreach($sale as $product)
					<div class="col-6 col-lg-4 producto">
						<div class="img-producto">
							<a href="/products/{{$product->id}}">
								<img src="/img/producto/producto.jpg" alt="" class="img-fluid">
							</a>
						</div>
						<a href="/products/{{$product->id}}" class="product-title">{{$product->nombre}}</a>
						<p class="product-price">${{$product->precio}}</p>
						@if($product->sale)
							<div class="sale">
								<i class="fas fa-piggy-bank"></i>
							</div>
						@endif
						<a href="#" class="btn btn-dark">Comprar</a>
						<a href="/products/{{$product->id}}" class="btn btn-secondary">Ver</a>
					</div>
				@endforeach
		</div> --}}
	</div>

@endsection