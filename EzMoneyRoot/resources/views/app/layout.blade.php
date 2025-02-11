<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>@yield('title')</title>


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  @vite('resources/css/app.css')

  
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-sm bg-body-tertiary p-0">
          <div class="container-fluid "style="background: #16C64F;height: 52px;">
            <div id="nav-brand" class="ms-5 col justify-content-center align-items-center">
              <a class="navbar-brand align-items-center" href="{{route('app.index')}}"><i class="bi bi-boxes" style="font-size: 20px"></i> EzMoney!</a>
            </div>
              

              <div class="collapse col navbar-collapse justify-content-center mx-auto" id="mainNav">
                  <ul class="navbar-nav">
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('main.index')}}">Visão Geral</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('transactions.view') }}">Lançamentos</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Relatórios</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Limite de Gastos</a>
                      </li>
                  </ul>
              </div>
              <div class="collapse col navbar-collapse justify-content-center" id="secondaryNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a href="">Settings</a>
                  </li>
                  <li class="nav-item">
                    <a href="">Notifications</a>
                  </li>
                  <li class="nav-item">
                    <a href="">Profile</a>
                  </li>
                </ul>
              </div>
          </div>
      </nav>
  </header>


  
  @yield('content')

  <footer>
    <!--  CRIAR FOOTER-->
  </footer>
  
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  </body>
</html>
