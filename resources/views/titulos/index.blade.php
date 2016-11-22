@extends('layouts.app')
@section('content')
<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-8 col-sm-offset-2 text-left">
      {{var_dump($filmes)}}
      <hr>
      {{ var_dump($filmes->search)}}
      <hr>    
      @foreach($filmes as $filme)
      {{var_dump( key($filmes)) }}   
      <h4>1</h4>
      <p>Lorem ipsum .</p>
      <hr>
      @endforeach-->
    </div>
  </div>
</div>

@endsection

