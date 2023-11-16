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
        
    <h1>Offcanvas</h1>

    <div class="offcanvas" id="menu">
      <div class="offcanvas-header">
        <h1 class="offcanvas-title">Menu de Aulas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body">
        <a href="http://localhost/cursobootstrap/cfbcursos/aula01-instalacao/" target="_blank">Aula de Instalação</a><br>
        <a href="http://localhost/cursobootstrap/cfbcursos/aula02-containeres/" target="_blank">Aula de Containeres</a><br>
        <a href="http://localhost/cursobootstrap/cfbcursos/aula03-grids/" target="_blank">Aula de GRIDs</a><br>
        <a href="http://localhost/cursobootstrap/cfbcursos/aula05-tipografia/" target="_blank">Aula de Tipografia</a><br>
      </div>
    </div>

    <div class="container-fluid mt-3">
      <h3>Offcanvas Janela Lateral</h3>
      <p>Aulas de Bootstrap pelo youtube da CFBCursos, bem legais e com ótima didática.</p>
      <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu">
        Abrir janela lateral
      </button>
    </div>


    <div class="offcanvas offcanvas-start" id="menu2">
      <div class="offcanvas-header">
        <h1 class="offcanvas-title">Menu de Aulas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body">
        <a href="http://localhost/cursobootstrap/cfbcursos/aula01-instalacao/" target="_blank">Aula de Instalação</a><br>
        <a href="http://localhost/cursobootstrap/cfbcursos/aula02-containeres/" target="_blank">Aula de Containeres</a><br>
        <a href="http://localhost/cursobootstrap/cfbcursos/aula03-grids/" target="_blank">Aula de GRIDs</a><br>
        <a href="http://localhost/cursobootstrap/cfbcursos/aula05-tipografia/" target="_blank">Aula de Tipografia</a><br>
      </div>
    </div>

    <div class="container-fluid mt-3">
      <h3>Offcanvas Janela Lateral esquerda</h3>
      <p>Aulas de Bootstrap pelo youtube da CFBCursos, bem legais e com ótima didática.</p>
      <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu2">
        Abrir janela lateral
      </button>
    </div>


    <div class="offcanvas offcanvas-end" id="menu3">
      <div class="offcanvas-header">
        <h1 class="offcanvas-title">Menu de Aulas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body">
        <a href="http://localhost/cursobootstrap/cfbcursos/aula01-instalacao/" target="_blank">Aula de Instalação</a><br>
        <a href="http://localhost/cursobootstrap/cfbcursos/aula02-containeres/" target="_blank">Aula de Containeres</a><br>
        <a href="http://localhost/cursobootstrap/cfbcursos/aula03-grids/" target="_blank">Aula de GRIDs</a><br>
        <a href="http://localhost/cursobootstrap/cfbcursos/aula05-tipografia/" target="_blank">Aula de Tipografia</a><br>
      </div>
    </div>

    <div class="container-fluid mt-3">
      <h3>Offcanvas Janela Lateral direita</h3>
      <p>Aulas de Bootstrap pelo youtube da CFBCursos, bem legais e com ótima didática.</p>
      <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu3">
        Abrir janela lateral
      </button>
    </div>


    <div class="offcanvas offcanvas-top" id="menu4">
      <div class="offcanvas-header">
        <h1 class="offcanvas-title">Menu de Aulas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body">
        <a href="http://localhost/cursobootstrap/cfbcursos/aula01-instalacao/" target="_blank">Aula de Instalação</a><br>
        <a href="http://localhost/cursobootstrap/cfbcursos/aula02-containeres/" target="_blank">Aula de Containeres</a><br>
        <a href="http://localhost/cursobootstrap/cfbcursos/aula03-grids/" target="_blank">Aula de GRIDs</a><br>
        <a href="http://localhost/cursobootstrap/cfbcursos/aula05-tipografia/" target="_blank">Aula de Tipografia</a><br>
      </div>
    </div>

    <div class="container-fluid mt-3">
      <h3>Offcanvas Janela Lateral superior</h3>
      <p>Aulas de Bootstrap pelo youtube da CFBCursos, bem legais e com ótima didática.</p>
      <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu4">
        Abrir janela lateral
      </button>
    </div>
    
    
  </body>
</html>