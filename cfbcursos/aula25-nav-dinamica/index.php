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
    
    <h1>Navegação dinâmica</h1>

    <ul class="nav nav-tabs nav-justified">
      <li class="nav-item">
        <a href="#cursoBootstrap" data-bs-toggle="tab" class="nav-link">Bootstrap</a>
      </li>
      <li class="nav-item">
        <a href="#cursoCSS" data-bs-toggle="tab" class="nav-link">CSS</a>
      </li>
      <li class="nav-item">
        <a href="#cursoJavascript" data-bs-toggle="tab" class="nav-link">Javascript</a>
      </li>
    </ul>

    <div class="tab-content">
      <div id="cursoBootstrap" class="tab-pane container-fluid bg-primary p-3">Aulas de Bootstrap</div>
      <div id="cursoCSS" class="tab-pane container-fluid bg-success p-3">Aulas de CSS</div>
      <div id="cursoJavascript" class="tab-pane container-fluid bg-danger p-3">Aulas de Javascript</div>
    </div>
    
  </body>
</html>