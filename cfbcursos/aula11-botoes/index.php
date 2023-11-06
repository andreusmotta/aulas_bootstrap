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
    
    <h1>Botões</h1>
    
    <div class="container-fluid row bg-primary">
      <div class="container-fluid col bg-white m-3 p-3">
        <button type="button" class="btn">Normal</button>
        <button type="button" class="btn btn-primary">Primário</button>
        <button type="button" class="btn btn-secundary">Secundário</button>
        <button type="button" class="btn btn-success">Sucesso</button>
        <button type="button" class="btn btn-info">Informações</button>
      </div>
      <div class="container-fluid col bg-white m-3 p-3">
        <button type="button" class="btn btn-warning">Alerta</button>
        <button type="button" class="btn btn-danger">Perigo</button>
        <button type="button" class="btn btn-dark">Escuro</button>
        <button type="button" class="btn btn-light">Claro</button>
        <button type="button" class="btn btn-link">Link</button>
      </div>
    <div>
    <div class="container-fluid row bg-primary">
      <div class="container-fluid col bg-white m-3 p-3">        
        <button type="button" class="btn btn-outline-primary">Primário</button>
        <button type="button" class="btn btn-outline-secundary">Secundário</button>
        <button type="button" class="btn btn-outline-success">Sucesso</button>
        <button type="button" class="btn btn-outline-info">Informações</button>
      </div>
      <div class="container-fluid col bg-white m-3 p-3">
        <button type="button" class="btn btn-outline-warning">Alerta</button>
        <button type="button" class="btn btn-outline-danger">Perigo</button>
        <button type="button" class="btn btn-outline-dark">Escuro</button>
        <button type="button" class="btn btn-outline-light">Claro</button>
        <button type="button" class="btn btn-outline-link">Link</button>
      </div>
    </div>
    <div class="container-fluid bg-white m-3 p-3">
      <button type="button" class="btn btn-primary btn-sm">Botão small</button>
      <button type="button" class="btn btn-primary">Botão padrão</button>
      <button type="button" class="btn btn-primary btn-lg">Botão large</button>
    </div>
    <div class="container-fluid bg-white m-3 p-3">
      <button type="button" class="btn btn-primary btn-block">Botão marcado no bloco(div)</button>
      <button type="button" class="btn btn-secondary btn-block">Botão marcado no bloco(div)</button>
      <button type="button" class="btn btn-success btn-block">Botão marcado no bloco(div)</button>
    </div>
    <div class="container-fluid bg-white m-3 p-3">
      <button type="button" class="btn btn-primary btn-block disabled">Botão com disabled</button>
      <button type="button" class="btn btn-secondary btn-block disabled">Botão com disabled</button>
      <button type="button" class="btn btn-success btn-block disabled">Botão com disabled</button>
    </div>

  </body>
</html>