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
    
    <h1>Formatar Paginação</h1>
    
    Paginação normal usando pagination, page-item e page-link.
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">4</a></li>
      <li class="page-item"><a class="page-link" href="#">Próxima</a></li>
    </ul>
    <br>

    Paginação usando o active pra marcar que o elemento tá ativo.
    <ul class="pagination">
      <li class="page-item active"><a class="page-link" href="#">Anterior</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">4</a></li>
      <li class="page-item"><a class="page-link" href="#">Próxima</a></li>
    </ul>
    <br>

    Paginação usando o disabled pra mostrar que o elemento tá desativado.
    <ul class="pagination">
      <li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">4</a></li>
      <li class="page-item"><a class="page-link" href="#">Próxima</a></li>
    </ul>
    <br>

    Paginação usando script para mover o active por entre os elementos.
    <ul class="pagination">
      <li class="page-item" onclick="ativar(this)"><a class="page-link" href="#">Anterior</a></li>
      <li class="page-item" onclick="ativar(this)"><a class="page-link" href="#">1</a></li>
      <li class="page-item" onclick="ativar(this)"><a class="page-link" href="#">2</a></li>
      <li class="page-item" onclick="ativar(this)"><a class="page-link" href="#">3</a></li>
      <li class="page-item" onclick="ativar(this)"><a class="page-link" href="#">4</a></li>
      <li class="page-item" onclick="ativar(this)"><a class="page-link" href="#">Próxima</a></li>
    </ul>
    <br>

    <script>
      const ativar=(elemento)=>{
        let itens=document.getElementsByClassName("page-item");
        for(i=0;i<itens.length;i++){
          itens[i].classList.remove("active");
        }
        elemento.classList.add("active");
      }
    </script>

  </body>
</html>