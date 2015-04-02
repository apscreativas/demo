<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateArticuloRequest;
use App\Http\Controllers\Controller;
use App\Articulos;

use Request;

class ArticulosController extends Controller
{

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

}
