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
    
    <h1>Banner - Carrossel</h1>
    
    <div id="banner" class="carousel slide" data-bs-ride="carousel">
      <div id="indicadores" class="carousel-indicators">
        <button type="button" data-bs-target="#banner" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#banner" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#banner" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#banner" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#banner" data-bs-slide-to="4"></button>
      </div>

      <div id="imagens" class="carousel-inner">
        <div class="carousel-item active">
          <img src="../imgs/b1.png" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="../imgs/b2.png" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="../imgs/b3.png" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="../imgs/b4.png" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="../imgs/b5.png" class="d-block w-100">
        </div>
      </div>

      <button type="button" class="carousel-control-prev" data-bs-target="#banner" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button type="button" class="carousel-control-next" data-bs-target="#banner" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
      

    </div>

  </body>
</html>