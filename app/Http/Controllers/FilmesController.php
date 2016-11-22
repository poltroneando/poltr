<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;
class FilmesController extends Controller
{
    public function show(){
        $client = new Client();
        $filmes = $client->get('http://www.omdbapi.com/');
        return view('titulos/index',compact('filmes'));
    }
}
