@extends('app.layout')
@section('title', 'Homepage')
@section('content')


<section class="layout-section">
    <div class="section">

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


        <!-- MUDAR DE FLEX PARA GRID, para adiocinar os novos blocos-->
        <div class="container-dashboard">
            <div class="accountsWallet">
                <div class="accountBalance">
                    <small>Saldo Geral</small>
                    <p><small>R$</small> 3.225.45</p>
                </div>
                <hr>
                <h4> Minhas contas</h4>
                <ul class="accounts">
                    <li>
                        <div class="circle">
                            <!-- classe temporária -->
                        </div>
                        <div class="accountLabel">
                            <p>Bradesco</p> <p>R$ 0,00</p>
                        </div>
                    </li>
                    <li>
                        <div class="circle">
                            <!-- classe temporária -->
                        </div>
                        <div class="accountLabel">
                            <p>Carteira física</p> <p>R$ 0,00</p>
                        </div>
                    </li>
                    <li>
                        <div class="circle">
                            <!-- classe temporária -->
                        </div>
                        <div class="accountLabel">
                            <p>Mercado Pago</p> <p>R$ 3.225,45</p>
                        </div>
                    </li>
                </ul>

                <a href="...">Gerenciar contas</a>
            </div>

            <div class="creditCards">
                <div class="creditBalance">
                        <!-- Adicionar o Mês das faturas respectivas de forma dinamica -->
                    <small>Faturas Fevereiro</small>
                    <p><small>R$</small> -721,89</p>
                </div>
                <hr>
                <h4> Meus Cartões</h4>
                <!--   MUDAR PARA LISTAS DINAMICAS COM LARAVEL      -->
                <ul class="Cards">
                    <li>
                        <div class="top">
                            <img src="" alt="">
                            <p></p>
                            <a href=""></a>
                        </div>
                        <div class="bottom">
                            <div>
                                <small>Limite Disponível</small>
                                <p><small>R$</small> 2690,10</p>
                            </div>
                            <div> 
                                <small>Faturas Atual</small>
                                <p><small>R$</small> -9,90</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

    </div>
</section>

 <a href="{{route('login.logout')}}">LOGOUT</a>
  @endsection