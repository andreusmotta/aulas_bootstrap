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
      Olá mundo!!!
      <a href="http://localhost/cursobootstrap/cfbcursos/" class="btn btn-dark">Lista de aulas</a>
    </h1>

    Larguras:
    <div class="container-fluid">
      <div class="w-25 bg-primary mb-2">25%</div>
      <div class="w-50 bg-primary mb-2">50%</div>
      <div class="w-75 bg-primary mb-2">75%</div>
      <div class="w-100 bg-primary mb-2">100%</div>
      <div class="w-auto bg-primary mb-2">Auto</div>      
    </div>

    Altura (preciusa do style só pra ajudar a ver):
    <div class="container-fluid" style="height: 300px;">
      <div class="h-25 bg-danger mb-2 d-inline-block">25%</div>
      <div class="h-50 bg-danger mb-2 d-inline-block">50%</div>
      <div class="h-75 bg-danger mb-2 d-inline-block">75%</div>
      <div class="h-100 bg-danger mb-2 d-inline-block">100%</div>
      <div class="h-auto bg-danger mb-2 d-inline-block">Auto</div>      
    </div>
        
    Centralizar usando style:
    <div class="container-fluid bg-success">
      <div class="bg-danger" style="margin: auto; width: 200px">Centro</div>      
    </div>

    Centralizar usando Bootstrap:
    <div class="container-fluid bg-success">
      <div class="bg-danger mx-auto" style="width: 200px">Centro</div>      
    </div>
    
    </body>
</html>