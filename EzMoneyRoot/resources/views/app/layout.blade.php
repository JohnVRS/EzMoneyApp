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
      <nav class="navbar navbar-expand-sm p-0">
          <div class="container-fluid  "style="background: #16C64F;height: 52px;">
            <div id="nav-brand" class="col align-items-center">
              <a class="navbar-brand p-0" href="{{route('app.index')}}"><p class="text-light text-end fs-4"><i class="bi bi-boxes text-light" style="font-size: 23px;"></i> EzMoney!</p> </a>
            </div>
              

              <div class="collapse col navbar-collapse justify-content-center mx-auto" id="mainNav">
                  <ul class="navbar-nav">
                      <li class="nav-item">
                          <a class="nav-link text-light ms-2 me-2" href="{{ route('main.index')}}">Visão Geral</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-light ms-2 me-2" href="{{ route('transactions.view') }}">Lançamentos</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-light ms-2 me-2" href="#">Relatórios</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-light ms-2 me-2" href="#">Limite de Gastos</a>
                      </li>
                  </ul>
              </div>
              <div class="collapse col navbar-collapse justify-content-start align-items-center me-5" id="secondaryNav">
                <ul class="navbar-nav">
                  <li class="nav-item mt-2 me-2">
                    <a href=""><i class="bi bi-gear-fill text-light"></i></a>
                  </li>
                  <li class="nav-item mt-2">
                    <a href=""><i class="bi bi-bell-fill text-light"></i></a>
                  </li>
                  <li class="nav-item mt-1 ms-5">
                    <a href="{{ route('login.logout') }}"><i class="bi bi-person-circle text-light" style="font-size: 30px"></i></a>
                  </li>
                </ul>
              </div>
          </div>
      </nav>
  </header>


  
  @yield('content')

  <footer class="bg-dark p-4">
    <div class="container-fluid ">
      <div class="row align-items-center ">
        <div id="left" class="col justify-content-start">
          <i class="bi bi-boxes text-light fs-2 me-3 mt-4"></i>
          <p class="text-light fs-6">© 2025, Desenvolvido por: J. Vitor Rodrigues Santos</p>
        </div>
        <div id="right" class="col justify-content-end">
          <i class="bi bi-instagram text-light fs-2 ps-3"></i>

          <i class="bi bi-github text-light fs-2 ps-3"></i>

          <i class="bi bi-linkedin text-light fs-2 ps-3"></i>
        </div>
      </div>
      
  </div>
  </footer>
  
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  </body>
</html>
