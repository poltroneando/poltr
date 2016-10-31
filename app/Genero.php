<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'genero';
    protected $primaryKey = 'id_genero';
    public $timestamps = false;
    //
    protected $fillable = ['descricao'];
    public function filmes()
    {
        return $this->belongsToMany('App\Filme','genero_titulo','id_genero','id_titulo');
    }
}
