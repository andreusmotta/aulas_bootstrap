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
    
    <h1>Cards</h1>

    Cards padrão usando o card e suas partes:
    <div class="card">
      <div class="card-reader">
        <h1 class="card-title">Aula de Bootstrap</h1>
      </div>
      <div class="card-body">
        <p class="card-text"> Aulas de Bootstrap para iniciantes</p>
        <a href="https://localhost/cursobootstrap" target="_blank" class="btn btn-primary">Acesso</a>
      </div>
      <div class="card-footer">localhost/cursobootstrap</div>
    </div>
    <br>

    Card usando cards e com um style pra diminuir o tamanho.
    <div class="card" style="width: 250px;">
      <div class="card-reader">
        <h1 class="card-title">Aula de Bootstrap</h1>
      </div>
      <div class="card-body">
        <p class="card-text"> Aulas de Bootstrap para iniciantes</p>
        <a href="https://localhost/cursobootstrap" target="_blank" class="btn btn-primary">Acesso</a>
      </div>
      <div class="card-footer">localhost/cursobootstrap</div>
    </div>
    <br>

    Card usando cards e com um style pra diminuir o tamanho e uma imagem.
    <div class="card" style="width: 250px;">
      <div class="card-reader">
        <h1 class="card-title">Aula de Bootstrap</h1>
      </div>
      <img src="../imgs/logo01.png">
      <div class="card-body">
        <p class="card-text"> Aulas de Bootstrap para iniciantes</p>
        <a href="https://localhost/cursobootstrap" target="_blank" class="btn btn-primary">Acesso</a>
      </div>
      <div class="card-footer">localhost/cursobootstrap</div>
    </div>
    <br>

    Card usando cards e com um style pra diminuir o tamanho, uma imagem e com overlay (que não ví utilidade até o momento).
    <div class="card" style="width: 250px;">
      <div class="card-reader">
        <h1 class="card-title">Aula de Bootstrap</h1>
      </div>
      <img src="../imgs/logo01.png">
      <div class="card-body">
        <p class="card-text card-img-overlay"> Aulas de Bootstrap para iniciantes</p>
        <a href="https://localhost/cursobootstrap" target="_blank" class="btn btn-primary">Acesso</a>
      </div>
      <div class="card-footer">localhost/cursobootstrap</div>
    </div>
    <br>
    
  </body>
</html>