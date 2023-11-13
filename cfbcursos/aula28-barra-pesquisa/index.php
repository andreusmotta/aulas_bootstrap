<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula de Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="bg-secondary bg-gradient">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
    
    <h1>Barra de Pesquisa</h1>
    
    <nav class="navbar bg-dark navbar-dark">
      <div class="container-fluid">
        <a href="#" class="navbar-brand">
          <img src="../imgs/logo01.png" style="width: 50px;">
        </a>

        <form class="d-flex">
          <input type="text" name="" id="" class="form-control m-2">
          <button class="btn btn-primary m-2">Pesquisar</button>
        </form>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuCursos" style="cursor:pointer" aria-expanded="true">
          <span class="navbar-toggler-icon" ></span>
        </button>

        <div class="navbar-collapse collapse" id="menuCursos">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="#" class="nav-link">Arduino</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Bootstrap</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">C++</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Javascript</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </body>
</html>