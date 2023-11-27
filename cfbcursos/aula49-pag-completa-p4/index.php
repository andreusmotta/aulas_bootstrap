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
      .bg-CinzaClarim{
        background-color: #C0C0C0;
      }
    </style>
  </head>
  <!-- <body class="bg-secondary bg-gradient"> -->
  <body class="bg-CinzaClarim">

  <!-- Cabeçalho -->
    <header class="p-3 bg-secondary text-white d-flex">
      <img src="../imgs/logo02.png"  style="height: 150px;">
      <h3 class="m-auto align-self-center">RPGs de Mesa & Virtual</h3>
    </header>

  <!-- Barra de navegação -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-link">
                  <a href="#" class="nav-link active">Home</a>
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

  <!-- Conteúdo da página -->

    <!-- Tanto faz se usar main ou div no primeiro container -->
    <main class="container mt-5">
      <div class="row">
        <div class="col-sm-8">
          <div class="rounded p-2 mb-3 bg-CinzaClaro">
            <h2>Título do conteúdo</h2>
            <h5>Descrição do conteúdo</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec elit at arcu tincidunt suscipit vitae pharetra felis. In tempus nulla at nunc mattis scelerisque. Integer non pellentesque odio, in interdum magna.</p>
          </div>
          <div class="rounded p-2 mb-3 bg-CinzaClaro">
            <h2>Título do conteúdo</h2>
            <h5>Descrição do conteúdo</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec elit at arcu tincidunt suscipit vitae pharetra felis. In tempus nulla at nunc mattis scelerisque. Integer non pellentesque odio, in interdum magna.</p>
          </div>
          <div class="rounded p-2 mb-3 bg-CinzaClaro">
            <h2>Título do conteúdo</h2>
            <h5>Descrição do conteúdo</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec elit at arcu tincidunt suscipit vitae pharetra felis. In tempus nulla at nunc mattis scelerisque. Integer non pellentesque odio, in interdum magna.</p>
          </div>
        </div>

        <!-- Tanto faz usar aside ou div no espaço lateral -->
        <aside class="col-sm-4">
          <h2>Sobre</h2>
          <h5>Bucaneiros das Galáxias</h5>
          <p>Somos um grupo de criadores de conteúdo de RPG de mesa para a internet.</p>
          <h3 class="mt-3">Alguns sistemas usados</h3>
          <!-- Se tirar o flex-clumn fica um elemento na frente do outro. Pode ficar bão. -->
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a href="https://pokemontabletop.com/" class="nav-link" id="n1" onmouseover="marcar(this.id)" onmouseout="marcar(this.id)">Pokémon Tabletop United 1.05</a>
            </li>
            <li class="nav-item">
              <a href="https://pensamentocoletivo.com.br/role-playing-games/mutant-ano-zero/" class="nav-link" id="n2" onmouseover="marcar(this.id)" onmouseout="marcar(this.id)">Mutante Ano Zero</a>
            </li>
            <li class="nav-item">
              <a href="https://pelgranepress.com/trail-of-cthulhu/" class="nav-link" id="n3" onmouseover="marcar(this.id)" onmouseout="marcar(this.id)">Rastro de Cthulhu</a>
            </li>
            <li class="nav-item">
              <a href="https://www.chaosium.com/call-of-cthulhu-rpg/" class="nav-link" id="n4" onmouseover="marcar(this.id)" onmouseout="marcar(this.id)">Chamado de Cthulhu</a>
            </li>
            <li class="nav-item">
              <a href="https://theonyxpath.com/category/worlds/classicworldofdarkness/magetheascension/" class="nav-link" id="n5" onmouseover="marcar(this.id)" onmouseout="marcar(this.id)">Mago A Ascenção</a>
            </li>
          </ul>
        </aside>
      </div>
    </main>

    <!-- Tanto faz se usar footer ou div no rodapé -->
    <footer class="mt-5 p-4 bg-dark text-white text-center">
      <p>| Bucaneiros das Galáxias |</p>
    </footer>

    <!-- Script para aparecer o "active" nos itens do menu da direita dos RPGs, ficando a bordinha azul bonita. -->
    <script>
      const marcar=(obj)=>{
        document.getElementById(obj).classList.toggle("active")
      }
    </script>

  </body>
</html>