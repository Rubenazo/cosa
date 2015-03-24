@extends('layout')

@section('contenido')

<div class="jumbotron">
	<h1>Cosa</h1>
</div>

<div id="login" class="row marketing">
	@if (Auth::check())
		<a href="logout"><button class="btn btn-info center-block">Logout</button></a> <!-- PONER EL BOTON BIEN -->
	@else
		{{ Form::open(array('url' => 'login')) }}
			
			<div class="form-group">
			{{ Form::text('usuario',Input::old('usuario'),array('class'=>'form-control', 'placeholder'=>'Usuario', 'autocomplete'=>'off')) }}
			</div>
			
			<div class="form-group">
			{{ Form::text('contraseña','',array('class'=>'form-control', 'placeholder'=>'Contraseña', 'autocomplete'=>'off')) }}
			</div>

			@if (Session::has('error'))
	    		<div class="alert alert-danger">{{Session::get('error')}}</div>
	    	@endif

	    	@if (Session::has('notice'))
	    		<div class="alert alert-success">{{Session::get('notice')}}</div>
	    	@endif
			{{ Form::submit('Login',array('class'=>'btn btn-info center-block'))}}
			
		{{ Form::close() }}
	@endif
</div>

@stop

