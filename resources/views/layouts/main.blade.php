<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>


  <!-- css Styles -->
  <link rel="stylesheet" href="/css/styles.css">

  <!-- css bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- scripts -->
  <script src="/js/scripts.js"></script>

  <!-- font google -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">



</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="collapse navbar-collapse" id="navbar">
        <a href="/" class="navbar-brand">
          <img src="/img/logo.svg" alt="img.svg">
        </a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="/" class="nav-link">Eventos</a>
            <a href="/events/create" class="nav-link">Criar Eventos</a>
            <a href="/" class="nav-link">Entrar</a>
            <a href="/" class="nav-link">Cadastrar</a>

          </li>
        </ul>
      </div>
    </nav>
  </header>

  @yield('content')

  <footer>
    <p>HDC Events &copy; 2023 </p>
  </footer>

  <!-- scripts icons -->
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>