@extends ('master')

@section ('contenido')

<h1>Detalle de Articulo</h1>

<h1> {{ $articulo->titulo}} </h1>
<h2> {{ $articulo->descripcion }}</h2>
<h3> {{ $articulo->autor}} </h3>

@stop