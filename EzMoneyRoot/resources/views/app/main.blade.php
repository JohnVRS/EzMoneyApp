@extends('app.layout')
@section('title', 'Homepage')
@section('content')


<section class="layout-section">
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
          
                    <ul>
                        <li><a href="" class="expense" data-tooltip="Clique para adicionar uma despesa"><i class="small material-icons red-text" >remove_circle_outline</i> <p class="btn-title">DESPESA</p></a></li>
                        <li><a href="" class="revenue"><i class="small material-icons green-text">add_circle_outline</i> <p class="btn-title">RECEITA</p></a></li>
                        <li><a href="" class="transfer"><i class="small material-icons grey-text">swap_horiz</i> <p class="btn-title">TRANSF.</p></a></li>
                        <li><a href="" class="export-excel"><i class="small material-icons blue-text">file_download</i> <p class="btn-title">EXPORT</p></a></li>
                    </ul>
                        <!-- CONTINUAR TOOLTIPS CUSTom -->
                </div>
            </div>
        </div>

            <div class="accounts-overview"></div>

            <div class="creditCards"></div>
       

    </div>
</section>

 <a href="{{route('login.logout')}}">LOGOUT</a>
  @endsection