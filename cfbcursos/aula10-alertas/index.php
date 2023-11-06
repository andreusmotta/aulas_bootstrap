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
    
    <h1>Alertas</h1>

    <div class="alert alert-success">
      <strong>Success</strong> indica sucesso em uma ação.
    </div>
    <div class="alert alert-info">
      <strong>Info</strong> indica uma informação.
    </div>
    <div class="alert alert-warning">
      <strong>Warning</strong> indica um alerta.
    </div>
    <div class="alert alert-danger">
      <strong>Danger</strong> indica uma ação negativa.
    </div>
    <div class="alert alert-primary">
      <strong>Primary</strong> indica uma ação importante.
    </div>
    <div class="alert alert-secundary">
      <strong>Secundary</strong> indica uma ação não muito importante.
    </div>
    <div class="alert alert-info alert-dismissible">
      <strong>Dismissible</strong> é um alerta que junto com um button pode ser fechado.
      <button class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <div class="alert alert-success alert-dismissible fade show">
      <strong>Dismissible Fade</strong> é um alerta que junto com um button pode ser fechado e tem efeito de fade.
      <button class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    
  </body>
</html>