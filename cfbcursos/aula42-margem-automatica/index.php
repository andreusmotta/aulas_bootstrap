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
      Margens automáticas
      <a href="http://localhost/cursobootstrap/cfbcursos/" class="btn btn-dark">Lista de aulas</a>
    </h1>

    <h4>Colocando margens automáticas e responsivas.</h4>

    Nenhuma margem dos containeres:
    <div class="p-1 m-1 border border-1 border-dark d-flex" style="height: 150px;">
      <div class="bg-primary border border-1 border-dark">Aula de Web</div>
      <div class="bg-success border border-1 border-dark">Aula de Web</div>
      <div class="bg-info border border-1 border-dark">Aula de Web</div>
      <div class="bg-warning border border-1 border-dark">Aula de Web</div>
      <div class="bg-danger border border-1 border-dark">Aula de Web</div>
      <div class="bg-secondary border border-1 border-dark">Aula de Web</div>
      <div class="bg-dark border border-1 border-dark">Aula de Web</div>
      <div class="bg-light border border-1 border-dark">Aula de Web</div>      
  </div>
  <br>
  
  Usando o m-auto com start (ms-auto) pra colocar margem no primeiro elemento:
    <div class="p-1 m-1 border border-1 border-dark d-flex" style="height: 150px;">
      <div class="bg-primary border border-1 border-dark ms-auto">Aula de Web</div>
      <div class="bg-success border border-1 border-dark">Aula de Web</div>
      <div class="bg-info border border-1 border-dark">Aula de Web</div>
      <div class="bg-warning border border-1 border-dark">Aula de Web</div>
      <div class="bg-danger border border-1 border-dark">Aula de Web</div>
      <div class="bg-secondary border border-1 border-dark">Aula de Web</div>
      <div class="bg-dark border border-1 border-dark">Aula de Web</div>
      <div class="bg-light border border-1 border-dark">Aula de Web</div>      
  </div>
  <br>

    Usando o m-auto com start (ms-auto) pra colocar margem no segundo elemento:
    <div class="p-1 m-1 border border-1 border-dark d-flex" style="height: 150px;">
      <div class="bg-primary border border-1 border-dark">Aula de Web</div>
      <div class="bg-success border border-1 border-dark ms-auto">Aula de Web</div>
      <div class="bg-info border border-1 border-dark">Aula de Web</div>
      <div class="bg-warning border border-1 border-dark">Aula de Web</div>
      <div class="bg-danger border border-1 border-dark">Aula de Web</div>
      <div class="bg-secondary border border-1 border-dark">Aula de Web</div>
      <div class="bg-dark border border-1 border-dark">Aula de Web</div>
      <div class="bg-light border border-1 border-dark">Aula de Web</div>      
  </div>
  <br>

  Usando o m-auto com start (ms-auto) pra colocar margem no primeiro e no segundo elemento:
    <div class="p-1 m-1 border border-1 border-dark d-flex" style="height: 150px;">
      <div class="bg-primary border border-1 border-dark ms-auto">Aula de Web</div>
      <div class="bg-success border border-1 border-dark ms-auto">Aula de Web</div>
      <div class="bg-info border border-1 border-dark">Aula de Web</div>
      <div class="bg-warning border border-1 border-dark">Aula de Web</div>
      <div class="bg-danger border border-1 border-dark">Aula de Web</div>
      <div class="bg-secondary border border-1 border-dark">Aula de Web</div>
      <div class="bg-dark border border-1 border-dark">Aula de Web</div>
      <div class="bg-light border border-1 border-dark">Aula de Web</div>      
  </div>
  <br>

  Usando o m-auto com start (ms-auto) pra colocar margem em todos os elementos (fica responsivo):
    <div class="p-1 m-1 border border-1 border-dark d-flex" style="height: 150px;">
      <div class="bg-primary border border-1 border-dark ms-auto">Aula de Web</div>
      <div class="bg-success border border-1 border-dark ms-auto">Aula de Web</div>
      <div class="bg-info border border-1 border-dark ms-auto">Aula de Web</div>
      <div class="bg-warning border border-1 border-dark ms-auto">Aula de Web</div>
      <div class="bg-danger border border-1 border-dark ms-auto">Aula de Web</div>
      <div class="bg-secondary border border-1 border-dark ms-auto">Aula de Web</div>
      <div class="bg-dark border border-1 border-dark ms-auto">Aula de Web</div>
      <div class="bg-light border border-1 border-dark ms-auto">Aula de Web</div>      
  </div>
  <br>
      
  Usando o ms-auto no quinto elemento para separar no meio:
    <div class="p-1 m-1 border border-1 border-dark d-flex" style="height: 150px;">
      <div class="bg-primary border border-1 border-dark">Aula de Web</div>
      <div class="bg-success border border-1 border-dark">Aula de Web</div>
      <div class="bg-info border border-1 border-dark">Aula de Web</div>
      <div class="bg-warning border border-1 border-dark">Aula de Web</div>
      <div class="bg-danger border border-1 border-dark ms-auto">Aula de Web</div>
      <div class="bg-secondary border border-1 border-dark">Aula de Web</div>
      <div class="bg-dark border border-1 border-dark">Aula de Web</div>
      <div class="bg-light border border-1 border-dark">Aula de Web</div>      
  </div>
  <br>
      
  Repetindo o processo anterior mas colocando o me-auto (end) no quarto elemento:
    <div class="p-1 m-1 border border-1 border-dark d-flex" style="height: 150px;">
      <div class="bg-primary border border-1 border-dark">Aula de Web</div>
      <div class="bg-success border border-1 border-dark">Aula de Web</div>
      <div class="bg-info border border-1 border-dark">Aula de Web</div>
      <div class="bg-warning border border-1 border-dark me-auto">Aula de Web</div>
      <div class="bg-danger border border-1 border-dark">Aula de Web</div>
      <div class="bg-secondary border border-1 border-dark">Aula de Web</div>
      <div class="bg-dark border border-1 border-dark">Aula de Web</div>
      <div class="bg-light border border-1 border-dark">Aula de Web</div>      
  </div>
  <br>
      
  Usando o m-auto com alinhamento start e end ao mesmo tempo (mx-auto) pra colocar margem no primeiro elemento:
    <div class="p-1 m-1 border border-1 border-dark d-flex" style="height: 150px;">
      <div class="bg-primary border border-1 border-dark mx-auto">Aula de Web</div>
      <div class="bg-success border border-1 border-dark">Aula de Web</div>
      <div class="bg-info border border-1 border-dark">Aula de Web</div>
      <div class="bg-warning border border-1 border-dark">Aula de Web</div>
      <div class="bg-danger border border-1 border-dark">Aula de Web</div>
      <div class="bg-secondary border border-1 border-dark">Aula de Web</div>
      <div class="bg-dark border border-1 border-dark">Aula de Web</div>
      <div class="bg-light border border-1 border-dark">Aula de Web</div>      
  </div>
  <br>

  Usando o m-auto com top (mt-auto) pra colocar margem no primeiro elemento:
    <div class="p-1 m-1 border border-1 border-dark d-flex" style="height: 150px;">
      <div class="bg-primary border border-1 border-dark mt-auto">Aula de Web</div>
      <div class="bg-success border border-1 border-dark">Aula de Web</div>
      <div class="bg-info border border-1 border-dark">Aula de Web</div>
      <div class="bg-warning border border-1 border-dark">Aula de Web</div>
      <div class="bg-danger border border-1 border-dark">Aula de Web</div>
      <div class="bg-secondary border border-1 border-dark">Aula de Web</div>
      <div class="bg-dark border border-1 border-dark">Aula de Web</div>
      <div class="bg-light border border-1 border-dark">Aula de Web</div>      
  </div>
  <br>

  Usando o m-auto com botton (mb-auto) pra colocar margem no primeiro elemento:
    <div class="p-1 m-1 border border-1 border-dark d-flex" style="height: 150px;">
      <div class="bg-primary border border-1 border-dark mb-auto">Aula de Web</div>
      <div class="bg-success border border-1 border-dark">Aula de Web</div>
      <div class="bg-info border border-1 border-dark">Aula de Web</div>
      <div class="bg-warning border border-1 border-dark">Aula de Web</div>
      <div class="bg-danger border border-1 border-dark">Aula de Web</div>
      <div class="bg-secondary border border-1 border-dark">Aula de Web</div>
      <div class="bg-dark border border-1 border-dark">Aula de Web</div>
      <div class="bg-light border border-1 border-dark">Aula de Web</div>      
  </div>
  <br>

  Usando o m-auto com alinhamento top e botton ao mesmo tempo (my-auto) pra colocar margem no primeiro elemento:
    <div class="p-1 m-1 border border-1 border-dark d-flex" style="height: 150px;">
      <div class="bg-primary border border-1 border-dark my-auto">Aula de Web</div>
      <div class="bg-success border border-1 border-dark">Aula de Web</div>
      <div class="bg-info border border-1 border-dark">Aula de Web</div>
      <div class="bg-warning border border-1 border-dark">Aula de Web</div>
      <div class="bg-danger border border-1 border-dark">Aula de Web</div>
      <div class="bg-secondary border border-1 border-dark">Aula de Web</div>
      <div class="bg-dark border border-1 border-dark">Aula de Web</div>
      <div class="bg-light border border-1 border-dark">Aula de Web</div>      
  </div>
  <br>

  Combinando os m-auto para centralizar os elementos:
    <div class="p-1 m-1 border border-1 border-dark d-flex" style="height: 150px;">
      <div class="bg-primary border border-1 border-dark my-auto ms-auto">Aula de Web</div>
      <div class="bg-success border border-1 border-dark my-auto">Aula de Web</div>
      <div class="bg-info border border-1 border-dark my-auto">Aula de Web</div>
      <div class="bg-warning border border-1 border-dark my-auto">Aula de Web</div>
      <div class="bg-danger border border-1 border-dark my-auto">Aula de Web</div>
      <div class="bg-secondary border border-1 border-dark my-auto">Aula de Web</div>
      <div class="bg-dark border border-1 border-dark my-auto">Aula de Web</div>
      <div class="bg-light border border-1 border-dark my-auto me-auto">Aula de Web</div>      
  </div>
  <br>
  
    </body>
</html>