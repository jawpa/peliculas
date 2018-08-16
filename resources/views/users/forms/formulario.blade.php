{{ csrf_field() }}
	<div class="form-group">
		{{ Form::label('name', 'Nombre') }}
		{{ Form::text('name',old('name')) }} 
	</div>
	<div class="form-group">
		{{ Form::label('email', 'Email') }} 
		{{ Form::text('email',old('email')) }} 
	</div>
	<div class="form-group">
		{{ Form::label('password', 'Password') }} 
		{{ Form::password('password') }} 
	</div>