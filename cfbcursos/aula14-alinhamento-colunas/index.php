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
    
    <h1>Alinhamento de colunas</h1>
    
    <div class="container-fluid bg-white p-2">
      <p>Sem alinhamento.</p>
      <div class="row bg-primary m-2 p-2" style="height: 100px;">
        <div class="col bg-white bg-opacity-50 border">Coluna 1</div>
        <div class="col bg-white bg-opacity-50 border">Coluna 2</div>
        <div class="col bg-white bg-opacity-50 border">Coluna 3</div>
      </div>
      <p>Alinhamento com align-items-start.</p>
      <div class="row align-items-start bg-primary m-2 p-2" style="height: 100px;">
        <div class="col bg-white bg-opacity-50 border">Coluna 1</div>
        <div class="col bg-white bg-opacity-50 border">Coluna 2</div>
        <div class="col bg-white bg-opacity-50 border">Coluna 3</div>
      </div>
      <p>Alinhamento com align-items-center.</p>
      <div class="row align-items-center bg-primary m-2 p-2" style="height: 100px;">
        <div class="col bg-white bg-opacity-50 border">Coluna 1</div>
        <div class="col bg-white bg-opacity-50 border">Coluna 2</div>
        <div class="col bg-white bg-opacity-50 border">Coluna 3</div>
      </div>
      <p>Alinhamento com align-items-end.</p>
      <div class="row align-items-end bg-primary m-2 p-2" style="height: 100px;">
        <div class="col bg-white bg-opacity-50 border">Coluna 1</div>
        <div class="col bg-white bg-opacity-50 border">Coluna 2</div>
        <div class="col bg-white bg-opacity-50 border">Coluna 3</div>
      </div>
      <p>Alinhamento com align-self dentro de cada linha em vez de no contêiner.</p>
      <div class="row bg-primary m-2 p-2" style="height: 100px;">
        <div class="col align-self-start bg-white bg-opacity-50 border">Coluna 1</div>
        <div class="col align-self-center bg-white bg-opacity-50 border">Coluna 2</div>
        <div class="col align-self-end bg-white bg-opacity-50 border">Coluna 3</div>
      </div>
      <p>Alinhamento horizontal com justify-content-start (mesma coisa que sem nada).</p>
      <div class="row justify-content-start bg-primary m-2 p-2" style="height: 100px;">
        <div class="col-3 bg-white bg-opacity-50 border">Coluna 1</div>
        <div class="col-3 bg-white bg-opacity-50 border">Coluna 2</div>        
      </div>
      <p>Alinhamento horizontal com justify-content-center.</p>
      <div class="row justify-content-center bg-primary m-2 p-2" style="height: 100px;">
        <div class="col-3 bg-white bg-opacity-50 border">Coluna 1</div>
        <div class="col-3 bg-white bg-opacity-50 border">Coluna 2</div>        
      </div>
      <p>Alinhamento horizontal com justify-content-end.</p>
      <div class="row justify-content-end bg-primary m-2 p-2" style="height: 100px;">
        <div class="col-3 bg-white bg-opacity-50 border">Coluna 1</div>
        <div class="col-3 bg-white bg-opacity-50 border">Coluna 2</div>        
      </div>
      <p>Alterando a ordem das colunas usando o "order".</p>
      <div class="row bg-primary m-2 p-2" style="height: 100px;">
        <div class="col order-3 bg-white bg-opacity-50 border">Coluna 1</div>
        <div class="col order-1 bg-white bg-opacity-50 border">Coluna 2</div>        
        <div class="col order-2 bg-white bg-opacity-50 border">Coluna 3</div>        
      </div>
    </div>

  </body>
</html>