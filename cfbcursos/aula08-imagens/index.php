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
    
    <h1>Imagens</h1>
    
    <div class="container-fluid flex border border-dark p-3 my-3">
      <p>Imagem com w-25.</p>
      <img src="a320-33.png" class="w-25">
      <img src="logo01.png" class="w-25">
    </div>
    <div class="container-fluid flex border border-dark p-3 my-3">
      <p>Imagem com w-50 rounded.</p>
      <img src="a320-33.png" class="w-50 rounded">
      <img src="logo01.png" class="w-50 rounded">
    </div>
    <div class="container-fluid flex border border-dark p-3 my-3">
    <p>Imagem com w-25 rounded-circle.</p>
      <img src="a320-33.png" class="w-25 rounded-circle">
      <img src="logo01.png" class="w-25 rounded-circle">
    </div>
    <div class="container-fluid flex border border-dark p-3 my-3">
    <p>Imagem com w-25 rounded-circle e fundo branco no alpha do png do logo.</p>
      <img src="a320-33.png" class="w-25 rounded-circle">
      <img src="logo01.png" class="w-25 bg-white rounded-circle">
    </div>
    <div class="container-fluid flex border border-dark p-3 my-3">
    <p>Imagem com w-25 rounded-circle e d-block pra forçar uma imagem debaixo da outra.</p>
      <img src="a320-33.png" class="w-25 rounded-circle d-block">
      <img src="logo01.png" class="w-25 rounded-circle d-block">
    </div>
    <div class="container-fluid flex border border-dark p-3 my-3">
    <p>Imagem com w-25 rounded-circle com margem my-5 e d-block pra forçar uma imagem debaixo da outra.</p>
      <img src="a320-33.png" class="w-25 rounded-circle d-block my-5">
      <img src="logo01.png" class="w-25 rounded-circle d-block">
    </div>
    <div class="container-fluid flex border border-dark p-3 my-3">
    <p>Imagem com w-25 rounded-circle com margem centralizada mx-auto e d-block pra forçar uma imagem debaixo da outra.</p>
      <img src="a320-33.png" class="w-25 rounded-circle d-block mx-auto">
      <img src="logo01.png" class="w-25 rounded-circle d-block">
    </div>
    <div class="container-fluid flex border border-dark p-3 my-3">
    <p>Imagem com w-25 e img-thumbnail.</p>
      <img src="a320-33.png" class="w-25 img-thumbnail">
      <img src="logo01.png" class="w-25 img-thumbnail">
    </div>
    <div class="container-fluid flex border border-dark p-3 my-3">
    <p>Imagem com img-fluid que é a mesma coisa que usar style="max-width: 100%; height: auto;".</p>
      <img src="a320-33.png" class="img-fluid">
      <img src="logo01.png" style="max-width: 100%; height: auto;">
    </div>

  </body>
</html>