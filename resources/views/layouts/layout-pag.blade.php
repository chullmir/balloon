@extends('layouts.base')
@section('estructura')
<body>
	<div class="container @yield('csstype')">
		<div class="row header">
			<div class="col-12">
				<h1 class="titulo-pagina">@yield('titulo-pagina')</h1>
			</div>
		</div>
		<div class="row body">
			<div class="col-12">
				@yield('contenido')
			</div>
		</div>
	</div>
</body>
@endsection
