@extends('layouts.app')

@section('content')


  	<div class="container">
	 	<div class="row">
			<div class="col m12">
			    <div class="card-panel white z-depth-3">
			       	<H3 align="center">Bienvenido</H3>
			       	<div class="row">
				       	<div class="col m6">
				       		<a href="{{url('/restaurantes/rest')}}">
				    		<div class="card-panel amber darken-3 z-depth-5 center">
								<h4 class="white-text">Administrador de App</h4>
				    			<i class="material-icons center" style="font-size: 100px; color: black;">important_devices</i>
				   			</div>
				   			</a>
						</div>
						<div class="col m6">
				    		<a href="{{ url('/menu/menu') }}">
				    		<div class="card-panel amber darken-3 z-depth-5 center">
								<h4 class="white-text">Anministrador de Rest.</h4>
				    			<i class="material-icons center" style="font-size: 100px; color: black;">store</i>
				   			</div>
				   			</a>
						</div>

			    </div>
			</div>
		</div>
  	</div>

@endsection
