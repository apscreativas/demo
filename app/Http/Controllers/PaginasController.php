<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PaginasController extends Controller {

    //

    public function acerca()
    {

        $apoyo = [
            'David', 'Roger', 'Adrian'
        ];

        return view('paginas.acerca', compact('apoyo'));
    }

    public function contacto()
    {
        return view('contacto');
    }

}
