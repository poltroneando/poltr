<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genero;
use App\Http\Requests;

class GeneroController extends Controller
{
    //
    public function show(){
        $generos = Genero::all();
        return view('genero',compact('generos'));
    }
}
