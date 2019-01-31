@extends('layouts.base')
@section('pageTitle','Register')
@section('estructura')
<body>
 	<div class="container signjoin">
 		<div class="col-12">
 			<h4>Registrarse</h4>
 		</div>
 		<div class="col-12">
 			<form class="form-group" method="post" enctype="multipart/form-data" action="{{route('register')}}" id="registerForm">
 				@csrf
 				<div class="form-group">
 					
 					<input type="text" name="nombre" class="form-control form-name {{ $errors->has('nombre') ? ' is-invalid' : '' }}" placeholder="Nombre" id="nombre" value="{{old('nombre')}}">
 				</div>
 				@if($errors->has('nombre'))
 					<div class="error">
 						<strong> {{$errors->first('nombre')}} </strong>
 					</div>
 				@endif
 				

				<div class="form-group">
					<input type="text" name="lastname" class="form-control form-lastname {{ $errors->has('lastname') ? ' is-invalid' : '' }}" placeholder="Apellido*" id="lastname" value="{{old('lastname')}}">
				</div>
				@if($errors->has('lastname'))
 					<div class="error">
 						<strong> {{$errors->first('lastname')}} </strong>
 					</div>
 				@endif
				

				<div class="form-group">
					<input type="text" name="country" class="form-control {{ $errors->has('lastname') ? ' is-invalid' : '' }}" placeholder="País*" value="{{old('country')}}">
				</div>
				<script type="text/javascript" src="js/prueba.js"></script>
				<div>
					
				</div>
				@if($errors->has('country'))
 					<div class="error">
 						<strong> {{$errors->first('country')}} </strong>
 					</div>
 				@endif

 				

 				<div class="form-group">
 					<input type="text" name="email" class="form-control form-email {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="E-mail*" id="email" value="{{old('email')}}">
 				</div>
 				@if($errors->has('email'))
 					<div class="error">
 						<strong> {{$errors->first('email')}} </strong>
 					</div>
 				@endif
 				
 				<div class="form-group">
 					<input type="password" name="password" class="form-control form-password {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Constraseña*" id="password">
 				</div>
 				@if($errors->has('password'))
 					<div class="error">
 						<strong> {{$errors->first('password')}} </strong>
 					</div>
 				@endif

 				<div class="aclaracion">
 					<i class="fas fa-info-circle"></i>
 					<small>La contraseña debe tener 6 caracteres como mínimo.</small>
 				</div>

 				

				<div class="form-group">
					<input type="password" name="password_confirmation" class="form-control form-password {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" placeholder="Confirmar contraseña*" id="password-confirm">
				</div>
				@if($errors->has('password_confirmation'))
 					<div class="error">
 						<strong> {{$errors->first('password_confirmation')}} </strong>
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
 	<script src="js/validateRegister.js"></script>
</body>