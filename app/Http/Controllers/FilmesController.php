<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;
class FilmesController extends Controller
{
    public function show(){
        //$client = new Client();
        //$apirequest = $client->request('GET','http://www.omdbapi.com/?r=json&s=toy story&type=movie');
        $apirequest = json_decode(file_get_contents('http://www.omdbapi.com/?r=json&s=toy story&type=movie'));
        //$filmes = json_decode($apirequest->getBody()->getContents());
        //return view('titulos/index',compact('filmes'));
        return var_dump($apirequest);
    }
}
