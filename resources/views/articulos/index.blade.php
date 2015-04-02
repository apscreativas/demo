@extends ('master')

@section ('contenido')

<h1>Listado de Articulos</h1>

@foreach ($articulos as $articulo)

	<article>
		<a href="/articulos/{{ $articulo->id }}"> {{ $articulo->titulo }}</a> 
	</article>

@endforeach

@stop