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
    
    <h1>Collapse</h1>

    Botões utilizando o button e o data-bs-toggle. Desse jeito eles encavalam uns nos outros, jogando um pra baixo:
    <br>
    <button class="btn btn-success" data-bs-toggle="collapse" data-bs-target="#aulaboot0">Aulas Bootstrap</button>
    <div id="aulaboot0" class="collapse bg-primary border rounded p-4">
      Aulas de Bootstrap da CFB Cursos.
    </div>

    <button class="btn btn-success" data-bs-toggle="collapse" data-bs-target="#cursoboot0">Aulas Bootstrap</button>
    <div id="cursoboot0" class="collapse bg-primary border rounded p-4">
      Cursinho do youtube de Bootstrap da CFB Cursos.
    </div>
    <br>
    <br>

    Invertendo a ordem no código juntanto uma coisa com outra da pra impedir que o botão desça:
    <br>
    <button class="btn btn-success" data-bs-toggle="collapse" data-bs-target="#aulaboot1">Aulas Bootstrap</button>
    <button class="btn btn-success" data-bs-toggle="collapse" data-bs-target="#cursoboot1">Aulas Bootstrap</button>

    <div id="aulaboot1" class="collapse bg-primary border rounded p-4">
      Aulas de Bootstrap da CFB Cursos.
    </div>   
    <div id="cursoboot1" class="collapse bg-primary border rounded p-4">
      Cursinho do youtube de Bootstrap da CFB Cursos.
    </div>
    <br>
    <br>

    Usando o br da pra colocar um debaixo do outro de boas:
    <br>
    <button class="btn btn-success" data-bs-toggle="collapse" data-bs-target="#aulaboot2">Aulas Bootstrap</button>    

    <div id="aulaboot2" class="collapse bg-primary border rounded p-4">
      Aulas de Bootstrap da CFB Cursos.
    </div>
    <br>
    <br>
    
    <button class="btn btn-success" data-bs-toggle="collapse" data-bs-target="#cursoboot2">Aulas Bootstrap</button>
    <div id="cursoboot2" class="collapse bg-primary border rounded p-4">
      Cursinho do youtube de Bootstrap da CFB Cursos.
    </div>
    <br>
    <br>

    Agora botões utilizando o a href em vez do button. Fica igual por causa das classes btn e BEM mais enxuto.
    <br>    
    <a href="#aulaboot3" class="btn btn-success" data-bs-toggle="collapse">Aulas de Bootstrap</a>
    <a href="#cursoboot3" class="btn btn-success" data-bs-toggle="collapse">Aulas de Bootstrap</a>

    <div id="aulaboot3" class="collapse bg-primary border rounded p-4">
      Aulas de Bootstrap da CFB Cursos.
    </div>   
    <div id="cursoboot3" class="collapse bg-primary border rounded p-4">
      Cursinho do youtube de Bootstrap da CFB Cursos.
    </div>
    <br>
    <br>
    
  </body>
</html>