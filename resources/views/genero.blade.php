@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class"col-md-8 col-md-offset-2">
            <h3>Gêneros</h3>            
        </div>        
    </div>    
    <div class="row">
        @foreach($generos as $genero)   
        <div class="col-xs-6 col-sm-3">
            <a href="">{{ $genero->descricao }}</a>
        </div>
        @endforeach
    </div>
</div>
@endsection