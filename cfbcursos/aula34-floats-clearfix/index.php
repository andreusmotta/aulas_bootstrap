<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula de Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
      .caixa {
        border: 1px solid #000;
        padding: 6px;
        margin: 6px;
        color: #fff;
      }
      .limpa_fix{
        clear: both;
      }
    </style>
  </head>
  <body class="bg-secondary bg-gradient">

    <h1>
      Floats e Clearfix
      <a href="http://localhost/cursobootstrap/cfbcursos/" class="btn btn-dark">Lista de aulas</a>
    </h1>

    <h3>Fazendo os floats com CSS primeiro:</h3>

    <div>
      Usando o float para colocar os trens cada um de um lado e usando o estilo limpa_fix pra dar o clear dos lados para os próximos floats não subirem e encavalarem com o de cima:
      <br>
      <div class="caixa bg-primary" style="float: left;">Esquerda 1</div>
      <div class="caixa bg-primary" style="float: right;">Direita 1</div>
      <div class="caixa bg-success limpa_fix" style="float: left;">Esquerda 1</div>
      <div class="caixa bg-success" style="float: right;">Direita 1</div>
      <div class="caixa bg-secondary limpa_fix" style="float: left;">Esquerda 1</div>
      <div class="caixa bg-secondary" style="float: right;">Direita 1</div>
    </div>

    <hr class="limpa_fix">

    <h3>Fazendo os floats com Bootstrap:</h3>

    <div>
      Usando o float para colocar os trens cada um de um lado e usando containeres com clearfix para os próximos floats não subirem e encavalarem com o de cima:
      <br>
      <div class="clearfix">
        <div class="caixa bg-primary float-start">Esquerda 1</div>
        <div class="caixa bg-primary float-end">Direita 1</div>
      </div>
      <div class="clearfix">
        <div class="caixa bg-success float-start">Esquerda 1</div>
        <div class="caixa bg-success float-end">Direita 1</div>
      </div>
      <div class="clearfix">
        <div class="caixa bg-secondary float-start">Esquerda 1</div>
        <div class="caixa bg-secondary float-end">Direita 1</div>
      </div>
    </div>
    
  </body>
</html>