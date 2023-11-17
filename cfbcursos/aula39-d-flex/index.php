<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula de Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
  </head>
  <body class="bg-secondary bg-gradient">

    <h1>
      D-Flex
      <a href="http://localhost/cursobootstrap/cfbcursos/" class="btn btn-dark">Lista de aulas</a>
    </h1>
    
    Sem nada de d-flex:
    <div class="p-2" style="background-color: #ccc;">
      <div class="bg-primary">Aula de Bootstrap</div>
      <div class="bg-danger">Aula de Bootstrap</div>
      <div class="bg-warning">Aula de Bootstrap</div>
      <div class="bg-info">Aula de Bootstrap</div>
    </div>
    <br>
    
    D-flex usando style (sem bootstrap):
    <div class="p-2" style="display: flex; background-color: #ccc;">
      <div class="bg-primary">Aula de Bootstrap</div>
      <div class="bg-danger">Aula de Bootstrap</div>
      <div class="bg-warning">Aula de Bootstrap</div>
      <div class="bg-info">Aula de Bootstrap</div>
    </div>
    <br>
    
    Com d-flex:
    <div class="p-2 d-flex" style="background-color: #ccc;">
      <div class="bg-primary">Aula de Bootstrap</div>
      <div class="bg-danger">Aula de Bootstrap</div>
      <div class="bg-warning">Aula de Bootstrap</div>
      <div class="bg-info">Aula de Bootstrap</div>
    </div>
    <br>
    
    Com d-inline-flex:
    <div class="p-2 d-inline-flex" style="background-color: #ccc;">
      <div class="bg-primary">Aula de Bootstrap</div>
      <div class="bg-danger">Aula de Bootstrap</div>
      <div class="bg-warning">Aula de Bootstrap</div>
      <div class="bg-info">Aula de Bootstrap</div>
    </div>
    <br>
    
    <br>
    Com d-flex flex-row-reverse:
    <div class="p-2 d-flex flex-row-reverse" style="background-color: #ccc;">
      <div class="bg-primary">Aula de Bootstrap</div>
      <div class="bg-danger">Aula de Bootstrap</div>
      <div class="bg-warning">Aula de Bootstrap</div>
      <div class="bg-info">Aula de Bootstrap</div>
    </div>
    <br>

    Com d-flex flex-column:
    <div class="p-2 d-flex flex-column" style="background-color: #ccc;">
      <div class="bg-primary w-25">Aula de Bootstrap</div>
      <div class="bg-danger w-25">Aula de Bootstrap</div>
      <div class="bg-warning w-25">Aula de Bootstrap</div>
      <div class="bg-info w-25">Aula de Bootstrap</div>
    </div>
    <br>

    Com d-flex flex-column-reverse:
    <div class="p-2 d-flex flex-column-reverse" style="background-color: #ccc;">
      <div class="bg-primary w-25">Aula de Bootstrap</div>
      <div class="bg-danger w-25">Aula de Bootstrap</div>
      <div class="bg-warning w-25">Aula de Bootstrap</div>
      <div class="bg-info w-25">Aula de Bootstrap</div>
    </div>
    <br>


    
    </body>
</html>