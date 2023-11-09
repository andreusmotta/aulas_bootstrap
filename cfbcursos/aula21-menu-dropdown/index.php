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
    
    <h1>Menu Dropdown</h1>
    
    Botão de um menu dropdown com os itens dele encaixadinhos pra funcionar legal:
    <div class="dropdown">
      <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Aulas</button>
      <div class="dropdown-menu">
        <h2 class="dropdown-header">Desenvolvimento Web</h2>
        <a href="#" class="dropdown-item">Bootstrap</a>
        <a href="#" class="dropdown-item">Javascript</a>
        <hr class="dropdown-divider">
        <h2 class="dropdown-header">Desenvolvimento Desktop</h2>
        <a href="#" class="dropdown-item">C++</a>
        <a href="#" class="dropdown-item">QtCreator</a>
        <hr class="dropdown-divider">
        <h2 class="dropdown-header">Desenvolvimento Mobile</h2>
        <a href="#" class="dropdown-item">ReactNative</a>
        <a href="#" class="dropdown-item">Appinventor</a>
      </div>
    </div>
    <br>

    Botão de um menu dropdown na direita e com abertura para a esquerda:
    <div class="dropdown dropstart d-flex justify-content-end">
      <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Aulas</button>
      <div class="dropdown-menu">
        <h2 class="dropdown-header">Desenvolvimento Web</h2>
        <a href="#" class="dropdown-item">Bootstrap</a>
        <a href="#" class="dropdown-item">Javascript</a>
        <hr class="dropdown-divider">
        <h2 class="dropdown-header">Desenvolvimento Desktop</h2>
        <a href="#" class="dropdown-item">C++</a>
        <a href="#" class="dropdown-item">QtCreator</a>
        <hr class="dropdown-divider">
        <h2 class="dropdown-header">Desenvolvimento Mobile</h2>
        <a href="#" class="dropdown-item">ReactNative</a>
        <a href="#" class="dropdown-item">Appinventor</a>
      </div>
    </div>
    <br>

    Botão de um menu dropdown na esquerda e com abertura para a direita:
    <div class="dropdown dropend">
      <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Aulas</button>
      <div class="dropdown-menu">
        <h2 class="dropdown-header">Desenvolvimento Web</h2>
        <a href="#" class="dropdown-item">Bootstrap</a>
        <a href="#" class="dropdown-item">Javascript</a>
        <hr class="dropdown-divider">
        <h2 class="dropdown-header">Desenvolvimento Desktop</h2>
        <a href="#" class="dropdown-item">C++</a>
        <a href="#" class="dropdown-item">QtCreator</a>
        <hr class="dropdown-divider">
        <h2 class="dropdown-header">Desenvolvimento Mobile</h2>
        <a href="#" class="dropdown-item">ReactNative</a>
        <a href="#" class="dropdown-item">Appinventor</a>
      </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    
    Botão de um menu dropdown incluindo o dropup pro menu abrir pra cima:
    <div class="dropdown dropup">
      <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Aulas</button>
      <div class="dropdown-menu">
        <h2 class="dropdown-header">Desenvolvimento Web</h2>
        <a href="#" class="dropdown-item">Bootstrap</a>
        <a href="#" class="dropdown-item">Javascript</a>
        <hr class="dropdown-divider">
        <h2 class="dropdown-header">Desenvolvimento Desktop</h2>
        <a href="#" class="dropdown-item">C++</a>
        <a href="#" class="dropdown-item">QtCreator</a>
        <hr class="dropdown-divider">
        <h2 class="dropdown-header">Desenvolvimento Mobile</h2>
        <a href="#" class="dropdown-item">ReactNative</a>
        <a href="#" class="dropdown-item">Appinventor</a>
      </div>
    </div>

  </body>
</html>