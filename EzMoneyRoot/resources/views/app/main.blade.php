@extends('app.layout')
@section('title', 'Homepage')
@section('content')

<div class="container-section">
    <div class="container-overview">
    
        <div class="box-leftside">
            <div class="greeting">
                 <p>Boa noite,</p>
                 <p>João Vitor Rodrigues Santos</p>
            </div>
        
            <div class="budget-overview">
                <div class="budget-blocks" id="revenue">
                    <label>receita mensal</label>
                    <strong style="color: #129e3f;">R$ 5.651,47</strong>
                </div>
      
                <div class="budget-blocks" id="expense">
                  <label>despesa mensal</label>
                  <strong style="color: #d72638;">R$ 2.231,17</strong>
                </div>
      
                <div class="budget-blocks" id="report">
                    <p>ver relátorios</p>
                </div>  
            </div>
        </div>
        <div class="box-rightside">
            <div class="quick-actions">
                <div class="label">
                  <p>Acesso rápido</p>
                </div>
      
                <button class="btn-expense">Despesa</button>
      
                <button class="btn-revenue">Receita</button>
      
                <button class="btn-transfer">Transferência</button>
      
                <button class="btn-export-excel">Exportar</button>
            </div>
        </div>
    </div>
</div>
  
  
 <a href="{{route('login.logout')}}">LOGOUT</a>
  @endsection