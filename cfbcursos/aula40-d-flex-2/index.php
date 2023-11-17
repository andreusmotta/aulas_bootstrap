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
      D-Flex Alinhamento Horizontal
      <a href="http://localhost/cursobootstrap/cfbcursos/" class="btn btn-dark">Lista de aulas</a>
    </h1>
    
    Com d-flex:
    <div class="p-1 d-flex flex-row m-2" style="background-color: #ccc;">
      <div class="bg-primary">Aula de Bootstrap</div>
      <div class="bg-danger">Aula de Bootstrap</div>
      <div class="bg-warning">Aula de Bootstrap</div>
      <div class="bg-info">Aula de Bootstrap</div>
    </div>
    <br>
    
    Com d-flex alinhado na esquerda:
    <div class="p-1 d-flex flex-row m-2 justify-content-start" style="background-color: #ccc;">
      <div class="bg-primary">Aula de Bootstrap</div>
      <div class="bg-danger">Aula de Bootstrap</div>
      <div class="bg-warning">Aula de Bootstrap</div>
      <div class="bg-info">Aula de Bootstrap</div>
    </div>
    <br>
    
    Com d-flex alinhado a direita:
    <div class="p-1 d-flex flex-row m-2 justify-content-end" style="background-color: #ccc;">
      <div class="bg-primary">Aula de Bootstrap</div>
      <div class="bg-danger">Aula de Bootstrap</div>
      <div class="bg-warning">Aula de Bootstrap</div>
      <div class="bg-info">Aula de Bootstrap</div>
    </div>
    <br>
    
    Com d-flex alinhado no centro:
    <div class="p-1 d-flex flex-row m-2 justify-content-center" style="background-color: #ccc;">
      <div class="bg-primary">Aula de Bootstrap</div>
      <div class="bg-danger">Aula de Bootstrap</div>
      <div class="bg-warning">Aula de Bootstrap</div>
      <div class="bg-info">Aula de Bootstrap</div>
    </div>
    <br>
    
    Com d-flex between:
    <div class="p-1 d-flex flex-row m-2 justify-content-between" style="background-color: #ccc;">
      <div class="bg-primary">Aula de Bootstrap</div>
      <div class="bg-danger">Aula de Bootstrap</div>
      <div class="bg-warning">Aula de Bootstrap</div>
      <div class="bg-info">Aula de Bootstrap</div>
    </div>
    <br>
    
    Com d-flex around:
    <div class="p-1 d-flex flex-row m-2 justify-content-around" style="background-color: #ccc;">
      <div class="bg-primary">Aula de Bootstrap</div>
      <div class="bg-danger">Aula de Bootstrap</div>
      <div class="bg-warning">Aula de Bootstrap</div>
      <div class="bg-info">Aula de Bootstrap</div>
    </div>
    <br>
            
    Com d-flex flex-fill:
    <div class="p-1 d-flex flex-row m-2" style="background-color: #ccc;">
      <div class="bg-primary flex-fill">Aula de Bootstrap</div>
      <div class="bg-danger flex-fill">Aula de Bootstrap</div>
      <div class="bg-warning flex-fill">Aula de Bootstrap</div>
      <div class="bg-info flex-fill">Aula de Bootstrap</div>
    </div>
    <br>
            
    Com d-flex flex-fill em alguns elementos:
    <div class="p-1 d-flex flex-row m-2" style="background-color: #ccc;">
      <div class="bg-primary">Aula de Bootstrap</div>
      <div class="bg-danger flex-fill">Aula de Bootstrap</div>
      <div class="bg-warning">Aula de Bootstrap</div>
      <div class="bg-info flex-fill">Aula de Bootstrap</div>
    </div>
    <br>
    
    </body>
</html>