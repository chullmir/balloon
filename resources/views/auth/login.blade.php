@extends('layouts.base')
@section('pageTitle','Log In')
@section('estructura')
	<body>
		<div class="container signjoin">
			<div class="col-12 d-flex justify-content-between align-items-center">
				<h4>Ingresar</h4>
				<small><a href="{{route('password.request')}}">Olvidaste tu contraseña?</a></small>
			</div>
			<div class="col-12">
				<form action="{{route('login')}}" method="post" class="form-group">
					@csrf
					
					<input id="email" type="email" class="form-control form-email {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email"  value="{{old('email')}}">
					@if ($errors->has('email'))
						<div class="alert alert-danger">
							<strong>{{ $errors->first('email') }}</strong>
						</div>
					@endif

					<input id="password" type="password" class="form-control form-password {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña">
					@if ($errors->has('password'))
						<div class="alert alert-danger">
							<strong>{{ $errors->first('password') }}</strong>
						</div>
					@endif

					<div class="form-check d-flex">
						<label for="remember">Mantenerme conectado</label>
						<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
					</div>

         			<button type="submit" class="btn btn-info btn-block">Ingresar</button>
         		</form>
         	</div>
         	<div class="col-12">
         		<p>¿No tenés cuenta?</p>
         		<a href="{{route('register')}}" class="btn btn-warning btn-block">Registrarse</a>
         	</div>
        </div>
    </body>
@endsection