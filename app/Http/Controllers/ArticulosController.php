<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateArticuloRequest;
use App\Http\Controllers\Controller;
use App\Articulos;

use Request;

class ArticulosController extends Controller {

    public function index()
    {
        $articulos = Articulos::all();

        return view('articulos.index', compact('articulos'));
    }

    public function show($id)

    {
        $articulo = Articulos::find($id);

        return view('articulos.show', compact('articulo'));
    }

    public function create()

    {
        return view('articulos.create');
    }

    public function store(CreateArticuloRequest $request)

    {
        Articulos::create($request->all());

        return redirect('articulos');
    }

    public function edit($id)
    {
        $articulo = Articulos::find($id);

        return view('articulos.edit', compact('articulo'));

    }

    public function update($id, CreateArticuloRequest $request)
    {
        $articulo = Articulos::find($id);
        $articulo->update($request->all());

        return redirect('articulos');
    }

    public function destroy($id)
    {
        $articulo = Articulos::find($id);
        $articulo->delete();

        return redirect('articulos');
    }

}
