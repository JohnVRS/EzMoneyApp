<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>@yield('title')</title>

  <!-- CSS   -->
  <link rel="stylesheet" href="../css/login.blade.css">
  <link rel="stylesheet" href="../css/create.blade.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="../CSS//index/body.css">
  <link rel="stylesheet" href="../CSS/index/dashboard_saldos.css">
  <link rel="stylesheet" href="../CSS/modal.css">
  <link rel="stylesheet" href="../CSS/index/table.css">
  <link rel="stylesheet" href="../CSS/index/footer.css">
  <link rel="stylesheet" href="../CSS/index/logo.css">
  <link rel="stylesheet" href="../CSS/index/graficos.css">
</head>
<body>
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


@yield('content')




  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  </body>
</html>
