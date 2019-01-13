{{-- HEADER --}}
<header class="fixed-top container-fluid">
	
	<div class="row top d-flex align-items-start">
		<a href="{{route('home')}}"><i class="fas fa-home"></i></a>
		<a href="{{route('contacto')}}"><i class="fas fa-envelope"></i></a>
		@if(auth()->guest())
			<a href="{{route('login')}}" class="ml-auto"><i class="fas fa-sign-in-alt"></i>Log In</a>
		@else
			<a href="{{route('profile')}}" class="ml-auto"><i class="fas fa-user-circle"></i>Mi Perfil</a>
		@endif
	</div>	
		
	<nav class="navbar navbar-expand-lg navbar-dark">
		<a class="navbar-brand" href="{{route('home')}}">
			<img src="/img/logo.png" width="70px" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-plus"></i>
			{{-- <span class="navbar-toggler-icon"></span> --}}
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link {{Request::is('products') ? 'active':''}}" href="{{route('products.index')}}">Productos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{Request::is('mayorista') ? 'active':''}}" href="{{route('mayorista')}}">Mayorista</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{Request::is('envios') ? 'active':''}}" href="{{route('envios')}}">Envíos</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a href="{{route('franquicias')}}" class="dropdown-item {{Request::is('franquicias') ? 'active':''}}">Franquicias</a>
						<div class="dropdown-divider"></div>
						<a href="{{route('eventos')}}" class="dropdown-item {{Request::is('eventos') ? 'active':''}}">Eventos</a>
						<a href="{{route('publicitarios')}}" class="dropdown-item {{Request::is('publicitarios') ? 'active':''}}">Globos Publicitarios</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link {{Request::is('faq') ? 'active':''}}" href="{{route('faq')}}">FAQ</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0 " action="{{route('search')}}" method="get">
				<input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar" name="busqueda">

				<button class="btn btn-dark my-2 my-sm-0" type="submit">Buscar</button>

			</form>
		</div>
	</nav>





	<div class="container-fluid container-venta">
		<div class="row">
			<div class="col d-flex justify-content-center">
				<a href="{{route('puntos-venta')}}"><i class="fas fa-store-alt"></i> Puntos de Venta</a>
			</div>
		</div>
	</div>
</header>

{{-- FIN DE HEADER --}}