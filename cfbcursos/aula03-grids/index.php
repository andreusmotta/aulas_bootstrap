<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula de Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
    
    <h1>Aula de Grids</h1>
    <br>

    <div class="container-fluid border border-primary p-3">

      <div class="row">
        <div class="col border">Coluna 1</div>
        <div class="col border">Coluna 2</div>
        <div class="col border">Coluna 3</div>
      </div>
      <div class="row">
        <div class="col-sm border">Coluna 1</div>
        <div class="col-md border">Coluna 2</div>
        <div class="col-xxl border">Coluna 3</div>
      </div>
      <div class="row">
        <div class="col-1 border">Coluna 1</div>
        <div class="col-2 border">Coluna 2</div>
        <div class="col-3 border">Coluna 3</div>
      </div>
      <div class="row">
        <div class="col-sm-1 border">Coluna 1</div>
        <div class="col-md-1 border">Coluna 2</div>
        <div class="col-xxl-1 border">Coluna 3</div>
      </div>
    </div>
    <p>Aqui estamos usando as classes "row" e "col" para falar pro bootstrap que é um grid. Tem que obrigatoriamente ter o "row" pro grid funcionar.</p>
    <br>


    
  </body>
</html>