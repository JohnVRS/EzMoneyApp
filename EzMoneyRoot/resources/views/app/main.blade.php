@extends('components.layouts.headerAndFooter')
@section('title', 'Main')
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
                            
                            <!-- CRIAR MODAL PARA BOTOES DO CRUD, e usar o blade para criar um componente para as modais -->
                        <ul>
                            <li>
                                <!--
                                    <a href="" class="expense" data-tooltip="Clique para adicionar uma despesa"><i
                                            class="small material-icons red-text">remove_circle_outline</i>
                                    <p class="btn-title">DESPESA</p>
                                </a>
                                
                                -->
                                
                                <button type="button" class="">
                                    <i class="bi-alarm"></i>
                                    <p class="btn-tile">DESPESA</p>
                                </button>
                            </li>
                            <li><a href="" class="revenue"><i
                                        class="small material-icons green-text">add_circle_outline</i>
                                    <p class="btn-title">RECEITA</p>
                                </a>
                            </li>
                            <li><a href="" class="transfer"><i class="small material-icons grey-text">swap_horiz</i>
                                    <p class="btn-title">TRANSF.</p>
                                </a>
                            </li>
                            <li><a href="" class="export-excel"><i
                                        class="small material-icons blue-text">file_download</i>
                                    <p class="btn-title">EXPORT</p>
                                </a>
                            </li>
                        </ul>





                        <!-- CONTINUAR TOOLTIPS CUSTom -->
                    </div>
                </div>
            </div>

            <div class="container-dashboard">

                <div class="left">
                    <div class="accountsWallet">
                        <div class="accountBalance">
                            <small>Saldo Geral</small>
                            <p><small>R$</small> 3.225.45</p>
                        </div>
                        <hr>
                        <h4> Minhas contas</h4>
                        <ul class="accounts">
                            <li>
                                <img src="{{ asset('images/icons/bradesco.png') }}" alt="iconBradesco">
                                <div class="accountLabel">
                                    <p>Bradesco</p>
                                    <p>R$ 0,00</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('images/icons/nuconta.png') }}" alt="iconNuconta">
                                <div class="accountLabel">
                                    <p>Carteira física</p>
                                    <p>R$ 0,00</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('images/icons/mercadopago.png') }}" alt="iconMercadopago">
                                <div class="accountLabel">
                                    <p>Mercado Pago</p>
                                    <p>R$ 3.225,45</p>
                                </div>
                            </li>
                        </ul>

                        <a href="...">Gerenciar contas</a>
                    </div>


                    <div class="categoryExpenses">
                        <h4> Maiores gastos do mês atual</h4>
                        <div class="containerData">
                            <ul>
                                <li><span><i class="tiny large material-icons green">local_pizza</i>Alimentação</span><strong>36,77%</strong></li>
                                
                                <li><span><i class="tiny large material-icons pink">accessibility</i>Cuidados pessoais</span><strong>36,44%</strong></li>
                                
                                <li><span><i class="tiny large material-icons orange">motorcycle</i>Moto</span><strong>13,50%</strong></li>
                                
                                <li><span><i class="tiny large material-icons purple">payment</i>Assinaturas e serviços</span><strong>6,07%</strong></li>
                                
                                <li><span><i class="tiny large material-icons blue">local_taxi</i>Transporte</span><strong>5,81%</strong></li>
                            </ul>

                            <img src="{{asset("images/svg/donut-chart.svg")}}" alt="">
                        </div>
                    
                    </div>
                </div>
                <div class="right">
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
                                    <div class="topGet">
                                        <img src="{{ asset('images/icons/bradesco.png') }}" alt="iconBradesco">
                                        <strong> Bradesco 6630</strong>
                                    </div>
                                    <a href=""> Ver Fatura</a>
                                </div>
                                <div class="bottom">
                                    <div>
                                        <label>Limite Disponível</label>
                                        <span>R$ <strong>2.690,10</strong></span>
                                    </div>
                                    <div>
                                        <Label>Fatura atual <small>(ven. 10 / 2)</small></Label>
                                        <span>R$ <strong>-9,90</strong></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="top">
                                    <div class="topGet">
                                        <img src="{{ asset('images/icons/nuconta.png') }}" alt="iconBradesco">
                                        <strong> Nubank</strong>
                                    </div>

                                    <a href=""> Ver Fatura</a>
                                </div>
                                <div class="bottom">
                                    <div>
                                        <label>Limite Disponível</label>
                                        <span>R$ <strong>7.96</strong></span>
                                    </div>
                                    <div>
                                        <Label>Fatura atual <small>(ven. 1 / 2)</small></Label>
                                        <span>R$ <strong>-401,37</strong></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="top">
                                    <div class="topGet">
                                        <img src="{{ asset('images/icons/mercadopago.png') }}" alt="iconBradesco">
                                        <strong> Visa Mercado Pago</strong>
                                    </div>

                                    <a href=""> Ver Fatura</a>
                                </div>
                                <div class="bottom">
                                    <div>
                                        <label>Limite Disponível</label>
                                        <span>R$ <strong>689,38</strong></span>
                                    </div>
                                    <div>
                                        <Label>Fatura atual <small>(ven. 10 / 2)</small></Label>
                                        <span>R$ <strong>-310,62</strong></span>
                                    </div>
                                </div>
                            </li>
                            </li>
                        </ul>

                        <a href="" class="creditButton">Gerenciar Cartões</a>

                    </div>


                    <div class="weekExpenses">
                        
                        <h4>Gastos da semana</h4>
                        <hr>
                        <div>
                            <small>Semana</small>
                            <p><small>R$</small> 455,90</p>

                        
                        </div>
                        
                    </div>

                </div>

            </div>

        </div>
    </section>

@endsection
