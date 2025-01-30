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
  <!-- Recriar o layout usando o bootstrap -->
  <header id="layout-header">
    <div class="nav-container ">
      <a href="" id="main-logo"> <i class="small material-icons white-text" style="font-size:40px ">data_usage
      </i><p>EzMoney!</p></a>

      <nav id="main-nav" class="">
        <ul class="main-navigation">
          <li><a href=" {{ route('main.index')}}">visão geral</a></li>
          <li><a href="{{ route('transactions.view') }}">lançamentos</a></li>
          <li><a href="">relatórios</a></li>
          <li><a href="">limites de gastos</a></li>
        </ul>
      </nav>

      <nav id="right-nav">
        <ul>
          <li>
                <!-- Settings-->
                <a href=""><i class="tiny material-icons white-text" >settings</i></a>
          </li>
          <li>  
                <!-- Notifications -->
                <a href="{{route('welcome')}}"><i class="tiny material-icons white-text">notifications</i></a>
          </li>
          <li>
                <!-- My Accounts -->
                <a href=""><i class="tiny material-icons white-text" style="font-size: 35px;">sentiment_satisfied</i></a>
          </li>
        </ul>
      </nav>

  </div>
  </header>
  
  
@yield('content')

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  
  
  </body>
</html>
