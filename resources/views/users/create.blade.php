@extends('layouts.principal')
@section('content')
	<br>
	<h1>Ingresá el usuario nuevo</h1>
	{{-- <form action="" class="form-group">
		<div class="form-control">
			<label for="">Nombre</label>
			<input type="text" class="form-control" name="name">
		</div>
		<div class="form-control">
			<label for="">Correo</label>
			<input type="text" class="form-control" name="email">
		</div>
		<div class="form-control" name="password">
			<label for="">Contraseña</label>
			<input type="text" class="form-control">
		</div>
		<button class="btn btn-primary">Registrar</button>
	</form> --}}
    {{ Form::open(array('route' => 'users.store')) }}
    	@include('users.forms.formulario');
		<div class="form-group">
			{{ Form::submit('Registrar Usuario',['class' => 'btn btn-primary']) }} 	
		</div>
	{{ Form::close() }}
	

@stop()
