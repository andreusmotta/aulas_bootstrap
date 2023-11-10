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
    
    <h1>Navs com Dropdown</h1>

    Lista de navs usando também os dropdown para poder fazer um menu:
    <ul class="nav nav-pills nav-justified">
      <li class="nav-item">
        <a href="#" class="nav-link">Bootstrap</a>        
      </li>

      <li class="nav-item dropdown">
        <a href="#" class="nav-link active dropdown-toggle" data-bs-toggle="dropdown">CSS</a>        
        <ul class="dropdown-menu">
          <li><a href="%" class="dropdown-item">Aula 1</a></li>
          <li><a href="%" class="dropdown-item">Aula 2</a></li>
          <li><a href="%" class="dropdown-item">Aula 3</a></li>
          <li><a href="%" class="dropdown-item">Aula 4</a></li>
        </ul>      
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">Javascript</a>
      </li>
    </ul>   

  </body>
</html>