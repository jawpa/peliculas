@extends('layouts.principal')
@section('content')
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Email</th>
			<th colspan="2">Operaciones</th>
		</thead>
		@foreach ($users as $usuario)
		<tbody>
		    <td>{{ $usuario->name }}</td>
			<td>{{ $usuario->email }}</td>
			<td>{{ link_to_route('users.edit', $title = 'editar', $parameters = $usuario->id, $attributes = ['class' => 'btn btn-warning']) }}</td>
			<td>
				{{ Form::open(['route' => ['users.destroy',$usuario->id], 'method' => 'delete']) }}
					<div class="form-group">
						{{ Form::submit('borrar',['class' => 'btn btn-danger']) }} 	
					</div>
				{{ Form::close() }}
			</td>
		</tbody>
		@endforeach
		<th>Crear Usuario</th>
		<td></td>
		<td colspan="2">{{link_to_route('users.create', $title = 'crear', $parameters = [], $attributes = ['class' => 'btn btn-success']) }}
		</td>
		<tr>
		<th>Lista de Usuarios Borrados</th>
		<td></td>
		<td colspan="2">{{link_to_route('users.borrados', $title = 'Ver', $parameters = [], $attributes = ['class' => 'btn btn-info']) }}
		</td>
		</tr>
			
	</table>

	{{ $users->links() }}

@stop()