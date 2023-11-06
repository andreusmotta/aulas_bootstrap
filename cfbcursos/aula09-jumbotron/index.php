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
    
    <h1>Jumbotron</h1>
    <p>Serve para dar destaque nas coisas.</p>
    <p>Não tem mais desde o bootstrap 4, mas tem como simular ele.</p>

    <div id="jumbotron" class="container bg-primary text-white p-4 rounded my-4">
      <h1>Curso de Bootstrap</h1>
      <hr/>
      <p>Como fazer jumbotron sem usar jumbotron.</p>
    </div>
    
    <div class = "container">
      <button onclick="document.getElementById('jumbotron').classList.add('invisible')">Ocultar</button>
      <button onclick="document.getElementById('jumbotron').classList.remove('invisible')">Mostrar</button>
    </div>
    
  </body>
</html>