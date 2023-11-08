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
    
    <h1>Spinners</h1>

    Os spinners podem ter cores usando o text e até podem ser pequenos usando o spinner-border-sm.
    <br>
    <div class="spinner-border"></div>
    <div class="spinner-border spinner-border-sm"></div>
    <div class="spinner-border text-primary"></div>
    <div class="spinner-border text-primary spinner-border-sm"></div>
    <div class="spinner-border text-warning"></div>
    <div class="spinner-border text-danger"></div>
    <br>

    Os spinners podem ser do tipo grow e ter cores usando o text e até podem ser pequenos usando o spinner-grow-sm.
    <br>
    <div class="spinner-grow"></div>
    <div class="spinner-grow spinner-grow-sm"></div>
    <div class="spinner-grow text-primary"></div>
    <div class="spinner-grow text-primary spinner-grow-sm"></div>
    <div class="spinner-grow text-warning"></div>
    <div class="spinner-grow text-danger"></div>
    <br>
    
    Dá pra fazer botões massa usando o span:
    <br>
    <button class="btn btn-primary">
      <span class="spinner-border spinner-border-sm"></span> Aula de Bootstrap
    </button>
    <br>

    Só o botão também, pra tipo depois do usuário clicar.
    <br>
    <button class="btn btn-primary">
      <span class="spinner-border"></span>
    </button>
    <br>

    <!-- <button id="botao" class="btn btn-primary">
      <span class="spinner-border spinner-border-sm"></span> Aula de Bootstrap
    </button>
    
    <div class = "container">
      <button onclick="document.getElementById('botao').classList.add('d-none')">Ocultar</button>
      <button onclick="document.getElementById('botao').classList.remove('d-none')">Mostrar</button>
    </div> -->
    
    Dá pra tirar o spinner usando as opções de botões do HTML removendo o spinner-border da classe do span.
    <br>
    <button id="botao" class="btn btn-primary" onclick="document.getElementById('spin').classList.remove('spinner-border');">
      <span id="spin" class="spinner-border spinner-border-sm"></span> Aula de Bootstrap
    </button>
    <br>

    Dá pra colocar o spinner tirando o d-none da classe do span.
    <br>
    <button id="botao2" class="btn btn-primary" onclick="document.getElementById('spin2').classList.remove('d-none');">
      <span id="spin2" class="spinner-border spinner-border-sm d-none"></span> Aula de Bootstrap
    </button>
    <br>

  </body>
</html>