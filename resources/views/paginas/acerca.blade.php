@extends('master')

@section('contenido')

<h1>titulo de pagina </h1>

@if (count($apoyo))
	<h1> Personas que contribuyen a laravel.com.mx </h1>
	<ul>
		@foreach ($apoyo as $persona)
			<li> {{ $persona }} </li>
		@endforeach 
	</ul>
	@stop
@endif