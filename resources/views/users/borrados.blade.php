@extends('layouts.principal')
@section('content')
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Email</th>
			<th>Fecha de Borrado</th>
			<th>Operación</th>
		</thead>
		@foreach ($users as $usuario)
		<tbody>
		    <td>{{ $usuario->name }}</td>
			<td>{{ $usuario->email }}</td>
			<td>{{ $usuario->deleted_at }}</td>
			{{-- <td>{{ link_to_route('users.restablecer', $title = 'restablecer', $parameters = $usuario->id, $attributes = ['class' => 'btn btn-warning']) }}
			</td> --}}
			<td><a href="{{ url("/usuario_restablecer/{$usuario->id}")}}" class="btn btn-primary">restablecer</a></td>
			
		</tbody>
		@endforeach
		
		
			
	</table>

	{{ $users->links() }}

@stop()