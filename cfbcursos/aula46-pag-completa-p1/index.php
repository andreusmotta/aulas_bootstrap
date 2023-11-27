<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula de Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
      .bg-AzulEscuro{
        background-color: #046;
      }
      .bg-CinzaClaro{
        background-color: #ddd;
      }
      .bg-CinzaEscuro{
        background-color: #696969;
      }
    </style>
  </head>
  <!-- <body class="bg-secondary bg-gradient"> -->
  <body>

    <header class="p-3 bg-secondary text-white d-flex">
      <img src="../imgs/logo01.png"  style="height: 150px;">
      <h3 class="m-auto align-self-center">Modelo de site Bootstrap</h3>
    </header>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-link">
                  <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-link">
                  <a href="#" class="nav-link">Acompanhe-nos</a>
                </li>
                <li class="nav-link">
                  <a href="#" class="nav-link">Vídeos</a>
                </li>
            </ul>
        </div>
    </nav>

  </body>
</html>