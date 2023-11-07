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
    
    <h1>Grupos de Botões</h1>

    <div class="container-fluid bg-white my-3 p-3">
      <p>Grupo de Botões "lg"</p>
      <div class="btn-group btn-group-lg">
        <button type="button" class="btn btn-primary">HTML</button>
        <button type="button" class="btn btn-primary">CSS</button>
        <button type="button" class="btn btn-primary">Javascript</button>
        <button type="button" class="btn btn-primary">Bootstrap</button>
        <button type="button" class="btn btn-primary">React</button>
      </div>
    </div>
    <div class="container-fluid bg-white my-3 p-3">
      <p>Grupo de Botões normais</p>
      <div class="btn-group">
        <button type="button" class="btn btn-primary">HTML</button>
        <button type="button" class="btn btn-primary">CSS</button>
        <button type="button" class="btn btn-primary">Javascript</button>
        <button type="button" class="btn btn-primary">Bootstrap</button>
        <button type="button" class="btn btn-primary">React</button>
      </div>
    </div>
    <div class="container-fluid bg-white my-3 p-3">
      <p>Grupo de Botões "sm"</p>
      <div class="btn-group btn-group-sm">
        <button type="button" class="btn btn-primary">HTML</button>
        <button type="button" class="btn btn-primary">CSS</button>
        <button type="button" class="btn btn-primary">Javascript</button>
        <button type="button" class="btn btn-primary">Bootstrap</button>
        <button type="button" class="btn btn-primary">React</button>
      </div>
    </div>
    <div class="container-fluid bg-white my-3 p-3">
      <p>Grupo de Botões na vertical</p>
      <div class="btn-group-vertical btn-group-lg">
        <button type="button" class="btn btn-primary">HTML</button>
        <button type="button" class="btn btn-primary">CSS</button>
        <button type="button" class="btn btn-primary">Javascript</button>
        <button type="button" class="btn btn-primary">Bootstrap</button>
        <button type="button" class="btn btn-primary">React</button>
      </div>
      <div class="btn-group-vertical btn-group">
        <button type="button" class="btn btn-primary">HTML</button>
        <button type="button" class="btn btn-primary">CSS</button>
        <button type="button" class="btn btn-primary">Javascript</button>
        <button type="button" class="btn btn-primary">Bootstrap</button>
        <button type="button" class="btn btn-primary">React</button>
      </div>
      <div class="btn-group-vertical btn-group-sm">
        <button type="button" class="btn btn-primary">HTML</button>
        <button type="button" class="btn btn-primary">CSS</button>
        <button type="button" class="btn btn-primary">Javascript</button>
        <button type="button" class="btn btn-primary">Bootstrap</button>
        <button type="button" class="btn btn-primary">React</button>
      </div>
    </div>
    <div class="container-fluid bg-white my-3 p-3">
      <p>Grupo de Botões com dropdown</p>
      <div class="btn-group btn-group-sm">
        <button type="button" class="btn btn-primary">HTML</button>
        <button type="button" class="btn btn-primary">CSS</button>
        <button type="button" class="btn btn-primary">Javascript</button>
        <div class="btn-group">
          <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Bootstrap</button>
          <div class="dropdown-menu">
            <a href="#" class="dropdown-item">Variáveis</a>
            <a href="#" class="dropdown-item">Console</a>
            <a href="#" class="dropdown-item">Condicionais</a>
          </div>
        </div>
        <button type="button" class="btn btn-primary">React</button>
      </div>
    </div>
    
  </body>
</html>