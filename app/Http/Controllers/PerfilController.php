<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Http\Requests;

class PerfilController extends Controller
{
    //
    public function profile(){
        return view('profile/index', array('user' => Auth::user()));
    }
}
