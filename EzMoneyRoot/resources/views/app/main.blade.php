@extends('app.layout')
@section('title', 'Homepage')
@section('content')

  <div class="container-overview">
    
      <div class="welcome">
        <small style="font-size: 18px;color: rgb(82,82,82);">Boa tarde, -User-</small><br>  
      </div>

      <div class="budget-overview">
          <div class="revenue">
              <p>Receita Mensal</p>
          </div>

          <div class="expense">
              <p>Despesa Mensal</p>
          </div>

          <div class="report">
              <p>Ver relátorios</p>
          </div>
      </div>

      <div class="quick-actions">
          <div class="label">
            <h3>Acesso rápido</h3>
          </div>

          <button class="btn-expense">Despesa</button>

          <button class="btn-revenue">Receita</button>

          <button class="btn-transfer">Transferência</button>

          <button class="btn-export-excel">Exportar</button>
      </div>
  </div>
  
 <a href="{{route('login.logout')}}">LOGOUT</a>
  @endsection