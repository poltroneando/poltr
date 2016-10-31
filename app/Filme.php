<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $table = 'titulo';
    protected $primaryKey = 'id_titulo';
    public $timestamps = false;
    //
    private $fillable = ['nome_titulo', 'data_lancamento', 'nome_original', 'duracao', 'sinopse'];
}
