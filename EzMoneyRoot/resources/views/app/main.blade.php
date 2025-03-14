@extends('components.layouts.headerAndFooter')
@section('title', 'Main')
@section('content')

    <section class="layout-section">
        <div class="section">

            <div class="container-overview">

                <div class="box-leftside">
                    <div class="greeting">
                        <p>Boa noite,</p>
                        <p>
                            {{
                                $user->name;
                            }}
                        </p>
                    </div>

                    <div class="budget-overview">
                        <div class="budget-blocks" id="revenue">
                            <label>receita mensal</label>
                            <strong style="color: #129e3f;">R$ {{ $user->balance}}</strong>
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
                            
                            <li>    
                                <button id="expense" type="button" class="btn pt-3" data-bs-toggle="modal" data-bs-target="#expenseModal">
                                    <i class="bi bi-dash-circle text-danger"></i>
                                    <p class="btn-title">DESPESA</p>
                                </button>
                            </li>
                            <li>
                                <button id="revenue" type="button" class="btn pt-3" data-bs-toggle="modal" data-bs-target="#revenueModal">
                                    <i class="bi bi-plus-circle text-success"></i>
                                    <p class="btn-title">RECEITA</p>
                                </button>
                                
                            </li>
                            <li>
                                <button id="transf" type="button" class="btn pt-3" data-bs-toggle="modal" data-bs-target="#transfModal">
                                    <i class="bi bi-repeat text-secondary"></i>
                                    <p class="btn-title">TRANSF.</p>
                                </button>
                            </li>
                            <li>
                                <button id="exportExcel" type="button" class="btn pt-3" data-bs-toggle="modal" data-bs-target="#exportModal">
                                    <i class="bi bi-chevron-double-up text-primary"></i>
                                    <p class="btn-title">EXPORT</p>
                                </button>
                            </li>
                        </ul>
                    </div>

                    <x-modal.expense></x-modal.expense>
                    <x-modal.revenue></x-modal.revenue>
                

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
                                <li><span><i
                                            class="tiny large material-icons green">local_pizza</i>Alimentação</span><strong>36,77%</strong>
                                </li>

                                <li><span><i class="tiny large material-icons pink">accessibility</i>Cuidados
                                        pessoais</span><strong>36,44%</strong></li>

                                <li><span><i
                                            class="tiny large material-icons orange">motorcycle</i>Moto</span><strong>13,50%</strong>
                                </li>

                                <li><span><i class="tiny large material-icons purple">payment</i>Assinaturas e
                                        serviços</span><strong>6,07%</strong></li>

                                <li><span><i
                                            class="tiny large material-icons blue">local_taxi</i>Transporte</span><strong>5,81%</strong>
                                </li>
                            </ul>

                            <img src="{{ asset('images/svg/donut-chart.svg') }}" alt="">
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
