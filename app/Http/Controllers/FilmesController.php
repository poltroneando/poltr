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
        //$apirequest = json_decode(file_get_contents('http://www.omdbapi.com/?r=json&s=toy story&type=movie'));
        $curl_handle=curl_init('http://www.omdbapi.com/?r=json&s=rocky&type=movie');
        curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($curl_handle, CURLOPT_FRESH_CONNECT, 1);
        curl_setopt($curl_handle, CURLOPT_HEADER, false);
        curl_setopt($curl_handle, CURLOPT_ENCODING,'');
        curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        
        curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.8.1) Gecko/20061010 Firefox/2.0');
        $apirequest = curl_exec($curl_handle);
        curl_close($curl_handle);
        $filmes = json_decode($apirequest);
        return view('titulos/index',compact('filmes'));
        //return var_dump($apirequest);
    }
}
