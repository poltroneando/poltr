@extends('layouts.app')
@section('content')
<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-8 col-sm-offset-2 text-left">
      {{var_dump($filmes)}}
      @foreach($filmes as $filme)
      {{var_dump($filme) }}   
      <h4>{{ $filme->title }}1</h4>
      <p>Lorem ipsum .</p>
      <hr>
      @endforeach
    </div>
  </div>
</div>

@endsection

