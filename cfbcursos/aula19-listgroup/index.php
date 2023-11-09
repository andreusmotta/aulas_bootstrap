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
    
    <h1>List Groups</h1>

    Lista usando ul e li:
    <ul class="list-group">
      <li class="list-group-item list-group-item-action">Aula de Bootstrap</li>
      <li class="list-group-item list-group-item-action">Aula de Javascript</li>
      <li class="list-group-item list-group-item-action">Aula de C++</li>
    </ul>
    <br>

    Lista usando contêiner e "a href":
    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-action">Aula de Bootstrap</a>
      <a href="#" class="list-group-item list-group-item-action">Aula de Javascript</a>
      <a href="#" class="list-group-item list-group-item-action">Aula de C++</a>
    </div>
    <br>

    Lista horizontal usando ul e li com list-group-horizontal:
    <ul class="list-group list-group-horizontal">
      <li class="list-group-item list-group-item-action">Aula de Bootstrap</li>
      <li class="list-group-item list-group-item-action">Aula de Javascript</li>
      <li class="list-group-item list-group-item-action">Aula de C++</li>
    </ul>
    <br>

    Lista usando contêiner e "a href" com list-group-horizontal:
    <div class="list-group list-group-horizontal">
      <a href="#" class="list-group-item list-group-item-action">Aula de Bootstrap</a>
      <a href="#" class="list-group-item list-group-item-action">Aula de Javascript</a>
      <a href="#" class="list-group-item list-group-item-action">Aula de C++</a>
    </div>
    <br>

    Lista usando contêiner e "a href" com list-group-horizontal e cores:
    <div class="list-group list-group-horizontal">
      <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Aula de Bootstrap</a>
      <a href="#" class="list-group-item list-group-item-action list-group-item-secundary">Aula de Javascript</a>
      <a href="#" class="list-group-item list-group-item-action list-group-item-success">Aula de C++</a>
    </div>
    <br>

    Lista usando ul e li, com badge dentro de um span pra apareer a formatação tipo notificação do número.
    <ul class="list-group">
      <li class="list-group-item list-group-item-action">Aula de Bootstrap <span class="badge bg-primary rounded-pill">19</span></li>
      <li class="list-group-item list-group-item-action">Aula de Javascript <span class="badge bg-primary rounded-pill">19</span></li>
      <li class="list-group-item list-group-item-action">Aula de C++ <span class="badge bg-primary rounded-pill">19</span></li>
    </ul>
    <br>

    Lista usando ul e li, com badge dentro de um span pra apareer a formatação tipo notificação do número na direita.
    <ul class="list-group">
      <li class="list-group-item list-group-item-action d-flex justify-content-between">Aula de Bootstrap <span class="badge bg-primary rounded-pill">19</span></li>
      <li class="list-group-item list-group-item-action d-flex justify-content-between">Aula de Javascript <span class="badge bg-primary rounded-pill">19</span></li>
      <li class="list-group-item list-group-item-action d-flex justify-content-between">Aula de C++ <span class="badge bg-primary rounded-pill">19</span></li>
    </ul>
    <br>

    
  </body>
</html>