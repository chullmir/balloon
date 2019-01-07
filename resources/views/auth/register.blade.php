@extends('layouts.base')
@section('pageTitle','Register')
@section('estructura')
<body>
 	<div class="container signjoin">
 		<div class="col-12">
 			<h4>Registrarse</h4>
 		</div>
 		<div class="col-12">
 			<form class="form-group" method="post" enctype="multipart/form-data" action="{{route('register')}}">
 				{{csrf_field()}}
 				<div class="form-group">
 					<input type="text" name="name" class="form-control form-name {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nombre*" id="name" value="{{ old('name') }}">
 				</div>
 				@if ($errors->has('name'))
 					<div class="alert alert-danger">
 						<strong>{{ $errors->first('name') }}</strong>
 					</div>
				@endif

				<div class="form-group">
					<input type="text" name="lastname" class="form-control form-lastname {{ $errors->has('lastname') ? ' is-invalid' : '' }}" placeholder="Apellido*" id="lastname" value="{{old('lastname')}}">
				</div>
				@if ($errors->has('lastname'))
 					<div class="alert alert-danger">
 						<strong>{{ $errors->first('lastname') }}</strong>
 					</div>
				@endif

				<div class="form-group">
					<input type="text" name="country" class="form-control {{ $errors->has('lastname') ? ' is-invalid' : '' }}" placeholder="País*" value="{{old('country')}}">
				</div>
				@if ($errors->has('country'))
 					<div class="alert alert-danger">
 						<strong>{{ $errors->first('country') }}</strong>
 					</div>
				@endif

				{{-- <div class="form-group">
					<label for="FormFileAvatar" class="mt-3">Subir una foto de perfil:</label>
					<input type="file" class="form-control-file" id="FormFileAvatar" name="avatar" id="avatar">
				</div> --}}

 				

 				<div class="form-group">
 					<input type="text" name="email" class="form-control form-email {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="E-mail*" id="email" value="{{old('email')}}">
 				</div>
 				@if ($errors->has('email'))
 					<div class="alert alert-danger">
 						<strong>{{ $errors->first('email') }}</strong>
 					</div>
				@endif
 				
 				<div class="form-group">
 					<input type="password" name="password" class="form-control form-password {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Constraseña*" id="password">
 				</div>
 				<div class="aclaracion">
 					<i class="fas fa-info-circle"></i>
 					<small>La contraseña debe tener 3 caracteres como mínimo.</small>
 				</div>
 				@if ($errors->has('password'))
 					<div class="alert alert-danger">
 						<strong>{{ $errors->first('password') }}</strong>
 					</div>
				@endif


				<div class="form-group">
					<input type="password" name="password_confirmation" class="form-control form-password {{ $errors->has('password-confirm') ? ' is-invalid' : '' }}" placeholder="Confirmar contraseña*" id="password-confirm">
				</div>
				@if ($errors->has('password-confirm'))
 					<div class="alert alert-danger">
 						<strong>{{ $errors->first('password-confirm') }}</strong>
 					</div>
				@endif

 				
 				<!-- <label for="FormFileAvatar" class="mt-3">Subir una foto de perfil:</label>
 				<input type="file"
 				class="form-control-file"
 				id="FormFileAvatar"
 				name="avatar"
 				id="avatar"> -->
 				<button type="submit" class="btn btn-info btn-block">Crear Cuenta</button>
 			</form>
 			<p>Ya estas registrado?</p>
 			<a href="{{route('login')}}" class="btn btn-warning btn-block">Iniciar Sesión</a>
 		</div>
 	</div>
</body>

