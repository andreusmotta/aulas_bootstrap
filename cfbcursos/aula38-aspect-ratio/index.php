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
      Proporção
      <a href="http://localhost/cursobootstrap/cfbcursos/" class="btn btn-dark">Lista de aulas</a>
    </h1>

    Sem nenhuma proporção:
    <div class="container">
      <div class="border border-1 border-dark">
        <iframe src="https://www.youtube.com/embed/GReMZuIBIrU"></iframe>
      </div>
    </div>

    Com proporção 1x1:
    <div class="container">
      <div class="border border-1 border-dark ratio ratio-1x1">
        <iframe src="https://www.youtube.com/embed/GReMZuIBIrU"></iframe>
      </div>
    </div>

    Com proporção 4x3:
    <div class="container">
      <div class="border border-1 border-dark ratio ratio-4x3">
        <iframe src="https://www.youtube.com/embed/GReMZuIBIrU"></iframe>
      </div>
    </div>

    Com proporção 16x9:
    <div class="container">
      <div class="border border-1 border-dark ratio ratio-16x9">
        <iframe src="https://www.youtube.com/embed/GReMZuIBIrU"></iframe>
      </div>
    </div>

    Com proporção 21x9:
    <div class="container">
      <div class="border border-1 border-dark ratio ratio-21x9">
        <iframe src="https://www.youtube.com/embed/GReMZuIBIrU"></iframe>
      </div>
    </div>


    
    </body>
</html>