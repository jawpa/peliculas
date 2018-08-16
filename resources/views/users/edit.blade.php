@extends('layouts.principal')
@section('content')
	<br>
	<h1>Editá al usuario</h1>

	{{ Form::close() }} 
	{{ Form::model($user, ['route' => ['users.update',$user->id], 'method' => 'put']) }}
		@include('users.forms.formulario')
	    <div class="form-group">
			{{ Form::submit('Editar Usuario',['class' => 'btn btn-primary']) }} 	
		</div>
	{{ Form::close() }}
	

@stop()
