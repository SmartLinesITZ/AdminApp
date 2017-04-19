
@extends("layouts.home");
@section("content")
<div class="">
	<h1>Prouctos</h1>
</div>
<div class="container">
	<table class="centered">
		<thead>
		<tr>
			<td>Nombre de restaurante</td>
			<td>Admin</td>
			<td>Correo</td>
			<td>Telefono</td>
			<td>Acciones</td>
		</tr>
		</thead>
		<tbody>
			@foreach ($restaurantes as $restaurante)
			<tr>
				<td>{{ $restaurante->nombrerest }}</td>
				<td>Nombre del Adminitrador</td>
				<td>Correo</td>
				<td>{{ $restaurante->telefono }}</td>
				<td>
					<!--a href="{{url('/products/'.$product->id" -->
					Editar
					</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="floating">
	<!--a href="{{url('/products/create')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">add</i >
	</a-->
</div>
@endsection
