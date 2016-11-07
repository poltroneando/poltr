@extends('layouts.app')

@section('content')
<div class="topo-perfil">
    <div class="profile-capa" style="background-image:url('/uploads/covers/{{ $user->capa}}'">
        <div class="profile-header">
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; border-radius:50%;"></br>
            <a class="profile-name">
                <span class="blockLink">{{ $user->name }}</span>
            </a>
            <form enctype="multipart/form-data" action="/perfil" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection

