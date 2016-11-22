@extends('layouts.app')
@section('content')
<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-8 col-sm-offset-2 text-left">
      {{var_dump($filmes)}}
      @foreach($filmes as $filme)
      {{var_dump($filme) }}   
      <h4>{{ $filme->title }}1</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
      @endforeach
    </div>
  </div>
</div>

@endsection

