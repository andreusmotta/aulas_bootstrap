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
    
    <h1>Alinhamento e posicionamento</h1>

 
    <p>Alinhamento uma debaixo da outra</p>
    <img src="../imgs/logo01.png" class="img-thumbnail w-25 d-block">
    <img src="../imgs/a320-33.png" class="img-thumbnail w-25">
    
    <p>Alinhamento centralizado usando o mx-auto.
    Não está funcionando nem dentro de um contêiner, não sei o motivo.</p>
    <img src="../imgs/logo01.png" class="img-thumbnail w-25 mx-auto">
      
    <p>Alinhamento centralizado usando o text-center dentro de um contêiner.</p>
    <div class="bg-black text-center">
      <img src="../imgs/a320-33.png" class="img-thumbnail w-25">
    </div>

    <p>Alinhamento usando o float-start (deixa na esquerda) e o float-end(deixa na direita).</p>
    <img src="../imgs/logo01.png" class="img-thumbnail w-25 float-start">
    <img src="../imgs/a320-33.png" class="img-thumbnail w-25 float-end">
     
  </body>
</html>