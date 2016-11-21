<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FilmesController extends Controller
{
    public function show(){
        //$generos = Genero::all();
        return view('titulos/index');
    }
}
