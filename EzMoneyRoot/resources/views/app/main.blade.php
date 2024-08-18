@extends('app.layout')
@section('title', 'Homepage')
@section('content')

 
    {{-- IMPEDIR USUARIOS NAO AUTENTICADOS A ENTRAR NESSA PAGINA --}}


  <h1>main.blade.php</h1>

 <a href="{{route('login.logout')}}">LOGOUT</a>
  @endsection