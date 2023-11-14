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
    
    <h1>Janela Modal</h1>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#janelaModal">      
      Abrir Janela Modal
    </button>
    
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#janelaModal2">      
      Abrir Janela Modal com fade
    </button>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#janelaModal3">      
      Abrir Janela Modal com sm
    </button>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#janelaModal4">      
      Abrir Janela Modal tela inteira
    </button>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#janelaModal5">      
      Abrir Janela Modal rolante
    </button>

    <div id="janelaModal" class="modal">

      <div class="modal-dialog">

        <div class="modal-content">

          <div class="modal-header">
            <h3 class="modal-title">Curso de Bootstrap</h3>
            <button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div class="modal-body">
            <p>Essas são aulas de Bootstrap que achei no youtube, porque preciso aprender a programar o mais rápido possível.</p>
            <p>Esse canal CFB cursos tem o professor Bruno com uma didática bem boa, tô achando que tá funcionando comigo.</p>
            <p>Desde que passei no concurso como Analista de Desenvolvimento eu não fiz nenhum programa para a prefeitura, mas agora que eu voltar será o momento.</p>
            <p>Curiosidade: O professor Bruno parece o Carlos, estagiário que trabalhou conosco na Prefeitura.</p>
          </div>

          <div class="modal-footer">
            <a href="#">Aqui colocaria o link no href para ir pro canal, no caso.</a>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
          </div>

        </div>

      </div>

    </div>

    <div id="janelaModal2" class="modal fade">

      <div class="modal-dialog">

        <div class="modal-content">

          <div class="modal-header">
            <h3 class="modal-title">Curso de Bootstrap</h3>
            <button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div class="modal-body">
            <p>Essas são aulas de Bootstrap que achei no youtube, porque preciso aprender a programar o mais rápido possível.</p>
            <p>Esse canal CFB cursos tem o professor Bruno com uma didática bem boa, tô achando que tá funcionando comigo.</p>
            <p>Desde que passei no concurso como Analista de Desenvolvimento eu não fiz nenhum programa para a prefeitura, mas agora que eu voltar será o momento.</p>
            <p>Curiosidade: O professor Bruno parece o Carlos, estagiário que trabalhou conosco na Prefeitura.</p>
          </div>

          <div class="modal-footer">
            <a href="#">Aqui colocaria o link no href para ir pro canal, no caso.</a>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
          </div>

        </div>

      </div>

    </div>

    <div id="janelaModal3" class="modal">

      <div class="modal-dialog modal-sm">

        <div class="modal-content">

          <div class="modal-header">
            <h3 class="modal-title">Curso de Bootstrap</h3>
            <button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div class="modal-body">
            <p>Essas são aulas de Bootstrap que achei no youtube, porque preciso aprender a programar o mais rápido possível.</p>
            <p>Esse canal CFB cursos tem o professor Bruno com uma didática bem boa, tô achando que tá funcionando comigo.</p>
            <p>Desde que passei no concurso como Analista de Desenvolvimento eu não fiz nenhum programa para a prefeitura, mas agora que eu voltar será o momento.</p>
            <p>Curiosidade: O professor Bruno parece o Carlos, estagiário que trabalhou conosco na Prefeitura.</p>
          </div>

          <div class="modal-footer">
            <a href="#">Aqui colocaria o link no href para ir pro canal, no caso.</a>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
          </div>

        </div>

      </div>

    </div>

    <div id="janelaModal4" class="modal">

      <div class="modal-dialog modal-fullscreen">

        <div class="modal-content">

          <div class="modal-header">
            <h3 class="modal-title">Curso de Bootstrap</h3>
            <button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div class="modal-body">
            <p>Essas são aulas de Bootstrap que achei no youtube, porque preciso aprender a programar o mais rápido possível.</p>
            <p>Esse canal CFB cursos tem o professor Bruno com uma didática bem boa, tô achando que tá funcionando comigo.</p>
            <p>Desde que passei no concurso como Analista de Desenvolvimento eu não fiz nenhum programa para a prefeitura, mas agora que eu voltar será o momento.</p>
            <p>Curiosidade: O professor Bruno parece o Carlos, estagiário que trabalhou conosco na Prefeitura.</p>
          </div>

          <div class="modal-footer">
            <a href="#">Aqui colocaria o link no href para ir pro canal, no caso.</a>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
          </div>

        </div>

      </div>

    </div>

    <div id="janelaModal5" class="modal">

      <div class="modal-dialog modal-dialog-scrollable">

        <div class="modal-content">

          <div class="modal-header">
            <h3 class="modal-title">Curso de Bootstrap</h3>
            <button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div class="modal-body">
            <p>Essas são aulas de Bootstrap que achei no youtube, porque preciso aprender a programar o mais rápido possível.</p>
            <p>Esse canal CFB cursos tem o professor Bruno com uma didática bem boa, tô achando que tá funcionando comigo.</p>
            <p>Desde que passei no concurso como Analista de Desenvolvimento eu não fiz nenhum programa para a prefeitura, mas agora que eu voltar será o momento.</p>
            <p>Curiosidade: O professor Bruno parece o Carlos, estagiário que trabalhou conosco na Prefeitura.</p>
            <p>Essas são aulas de Bootstrap que achei no youtube, porque preciso aprender a programar o mais rápido possível.</p>
            <p>Esse canal CFB cursos tem o professor Bruno com uma didática bem boa, tô achando que tá funcionando comigo.</p>
            <p>Desde que passei no concurso como Analista de Desenvolvimento eu não fiz nenhum programa para a prefeitura, mas agora que eu voltar será o momento.</p>
            <p>Curiosidade: O professor Bruno parece o Carlos, estagiário que trabalhou conosco na Prefeitura.</p>
            <p>Essas são aulas de Bootstrap que achei no youtube, porque preciso aprender a programar o mais rápido possível.</p>
            <p>Esse canal CFB cursos tem o professor Bruno com uma didática bem boa, tô achando que tá funcionando comigo.</p>
            <p>Desde que passei no concurso como Analista de Desenvolvimento eu não fiz nenhum programa para a prefeitura, mas agora que eu voltar será o momento.</p>
            <p>Curiosidade: O professor Bruno parece o Carlos, estagiário que trabalhou conosco na Prefeitura.</p>
          </div>

          <div class="modal-footer">
            <a href="#">Aqui colocaria o link no href para ir pro canal, no caso.</a>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
          </div>

        </div>

      </div>

    </div>
    
  </body>
</html>