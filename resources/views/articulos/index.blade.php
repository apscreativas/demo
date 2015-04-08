@extends ('master')

@section ('contenido')
    <br>


    <div class="panel panel-default">
        <div class="panel-heading"> Lista de Artículos</div>
        <table class="table table-responsive table-bordered">
            <thead>
                <tr>
                    <th> Artículo </th>
                    <th> Autor </th>
                    <th> Acciones </th>
                </tr>
            </thead>

            <tbody>
            @foreach ($articulos as $articulo)
                <tr>
                    <td> {{$articulo->titulo}}</td>
                    <td> {{$articulo->autor}}</td>
                    <td>
                        <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-warning btn-xs">Editar</a>
                        <a href="/articulos/{{$articulo->id}}" class="btn btn-success btn-xs">Detalles</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



@stop