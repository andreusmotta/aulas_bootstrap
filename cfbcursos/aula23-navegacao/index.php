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
    
    <h1>Navegação</h1>

    Lista normal usando ul, li e ahref:
    <ul class="nav">
      <li class="nav-item">
        <a href="#" class="nav-link">Bootstrap</a>        
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">CSS</a>        
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Javascript</a>
      </li>
    </ul>
    <br>

    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a href="#" class="nav-link">Bootstrap</a>        
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">CSS</a>        
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Javascript</a>
      </li>
    </ul>
    <br>

    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a href="#" class="nav-link">Bootstrap</a>        
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">CSS</a>        
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Javascript</a>
      </li>
    </ul>
    <br>

    Agora justificando os itens:
    <ul class="nav nav-justified">
      <li class="nav-item">
        <a href="#" class="nav-link">Bootstrap</a>        
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">CSS</a>        
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Javascript</a>
      </li>
    </ul>
    <br>

    Lista em estilo de abas. Detalhe que ela não alterna sozinha, tem que fazer um javascript pra por e tirar o active no click:
    <ul class="nav nav-tabs nav-justified">
      <li class="nav-item">
        <a href="#" class="nav-link active">Bootstrap</a>        
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">CSS</a>        
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Javascript</a>
      </li>
    </ul>
    <br>
    <br>

    Lista em estilo de pills. Detalhe que ela não alterna sozinha, tem que fazer um javascript pra por e tirar o active no click:
    <ul class="nav nav-pills nav-justified">
      <li class="nav-item">
        <a href="#" class="nav-link active">Bootstrap</a>        
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">CSS</a>        
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Javascript</a>
      </li>
    </ul>
    <br>

    Lista em estilo de pills tentando usar o script de mover os actives. Só funciona descomentando o script e comentando todas as outras listas acima dessa:
    <ul id="myUL" class="nav nav-pills nav-justified">
      <li class="nav-item">
        <a href="#" class="nav-link active">Bootstrap</a>        
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">CSS</a>        
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Javascript</a>
      </li>
    </ul>
    <br>

    <!-- Descomente aqui e comente todudo além da última lista para funcionar a alternancia do active:
    <script>
      // Get the container element
      var btnContainer = document.getElementById("myUL");

      // Get all buttons with class="btn" inside the container
      var btns = btnContainer.getElementsByClassName("nav-link");

      // Loop through the buttons and add the active class to the current/clicked button
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
        });
      } 
    </script>     -->
    
  </body>
</html>