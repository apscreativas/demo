@extends ('master')

@section ('contenido')

    <h1> Editar el artículo : {{ $articulo->titulo }}</h1>
    <hr/>

    {!! Form::model($articulo , ['method' => 'PATCH' , 'action' => ['ArticulosController@update' , $articulo->id ]  ]) !!}

    <!-- Titulo Form Input   -->
    <div class="form-group">
        {!! Form::label('titulo' , 'Titulo: ') !!}
        {!! Form::text('titulo' , null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('descripcion' , 'Descripción: ') !!}
        {!! Form::textarea('descripcion' , null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('autor' , 'Autor: ') !!}
        {!! Form::text('autor' , null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Modifica Artículo', ['class' => 'btn btn-primary form-control']) !!}
    </div>


    {!! Form::close() !!}

    {!! Form::open(['method' => 'DELETE' , 'route' => ['articulos.destroy' , $articulo->id]]) !!}
    <div class="form-group">
        {!! Form::submit('Elimina Artículo', ['class' => 'btn btn-danger form-control']) !!}
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif

@stop