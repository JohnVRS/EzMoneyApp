<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>@yield('title')</title>


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/main/container-overview.css')}}">
  
</head>
<body>

  <!-- 
      <nav class="green lighten-1" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#">Navbar Link</a></li>
          </ul>

          <ul id="nav-mobile" class="sidenav">
            <li><a href="#">Navbar Link</a></li>
          </ul>
          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
      </nav>
  -->
  
  <div class="nav-wrapper">
    <a href="" id="main-logo"> <img src="" alt=""></a>

    <nav id="main-nav">
      <ul class="main-navigation">
        <li><a href="">visão geral</a></li>
        <li><a href="">lançamentos</a></li>
        <li><a href="">relatórios</a></li>
        <li><a href="">limites de gastos</a></li>
      </ul>
    </nav>

    <nav id="right-nav">
      <ul>
        <li>
              <!-- Settings-->
              <a href="">SVG</a>
        </li>
        <li>  
              <!-- Notifications -->
              <a href="">SVG</a>
        </li>
        <li>
              <!-- My Accounts -->
              <a href="">Account profile</a>
        </li>
      </ul>
    </nav>

  </div>
  
@yield('content')

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  
  </body>
</html>
