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
    public function generos()
    {
        return $this->belongsToMany('App\Genero', 'genero_titulo','id_titulo','id_genero');
    }
}
