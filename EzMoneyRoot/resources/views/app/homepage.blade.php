@extends('app.layout')
@section('title', 'Homepage')
@section('content')


  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center  teal-text text-lighten-2">Bem-vindo ao Fins</h1>
      <div class="row center">
        <h5 class="header col s12 bolder">seu App de gerenciamento financeiro, vamos colocar sua vida no lugar 💸 </h5>
      </div>
      <div class="row center">
        <a href="{{route('login.create')}}" id="download-button" class="btn-large waves-effect waves-light green">Cadastro</a>
      </div>
      <div class="row center">
            já tem login?<a href="{{route('login.form')}}">Click aqui!</a>
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-green-text"><i class="small material-icons">attach_money</i></h2>
            <h5 class="center">Receitas</h5>

            <p class="center light">gerencia seus moneys.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center red-text medium"><i class="small material-icons">clear</i></h2>
            <h5 class="center">Despesas</h5>

            <p class="center light">evite suas despesas.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="small material-icons">assessment</i></h2>
            <h5 class="center">Relatórios</h5>

            <p class=" center light">tenha um relátorio da sua vida monetária</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>

  @endsection