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
      Alinhamento automático
      <a href="http://localhost/cursobootstrap/cfbcursos/" class="btn btn-dark">Lista de aulas</a>
    </h1>

    <h4>Permite alinhamento dos componentes independente da estrutura dos componentes. 
        Tem que prestar atenção que o align-self usa o eixo CONTRÁRIO ao usado pelo justify.
    </h4>

    Nenhuma margem dos containeres, mas como não está definido explicitamente, é como se tivesse um flex-row, o elemento principal é tratado como linhas:
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

    Alinhamento aling-self-start para alinhamento no topo. Como não tem nada falando se é pra tratar como linha ou coluna no elemento principal
    ele é tratado como linha, e aí apesar de usar um align-self-START, ele vai para o topo:
    <div class="p-1 m-1 border border-1 border-dark d-flex" style="height: 150px;">
      <div class="bg-primary border border-1 border-dark align-self-start">Aula de Web</div>
      <div class="bg-success border border-1 border-dark">Aula de Web</div>
      <div class="bg-info border border-1 border-dark">Aula de Web</div>
      <div class="bg-warning border border-1 border-dark">Aula de Web</div>
      <div class="bg-danger border border-1 border-dark">Aula de Web</div>
      <div class="bg-secondary border border-1 border-dark">Aula de Web</div>
      <div class="bg-dark border border-1 border-dark">Aula de Web</div>
      <div class="bg-light border border-1 border-dark">Aula de Web</div>      
    </div>
    <br>

    Alinhamento aling-self-end para alinhamento no fundo. Como não tem nada falando se é pra tratar como linha ou coluna no elemento principal
    ele é tratado como linha, e aí apesar de usar um align-self-END, ele vai para o fundo:
    <div class="p-1 m-1 border border-1 border-dark d-flex" style="height: 150px;">
      <div class="bg-primary border border-1 border-dark">Aula de Web</div>
      <div class="bg-success border border-1 border-dark align-self-end">Aula de Web</div>
      <div class="bg-info border border-1 border-dark">Aula de Web</div>
      <div class="bg-warning border border-1 border-dark">Aula de Web</div>
      <div class="bg-danger border border-1 border-dark">Aula de Web</div>
      <div class="bg-secondary border border-1 border-dark">Aula de Web</div>
      <div class="bg-dark border border-1 border-dark">Aula de Web</div>
      <div class="bg-light border border-1 border-dark">Aula de Web</div>      
    </div>
    <br>

    Alinhamento aling-self-center para alinhamento no centro. Como não tem nada falando se é pra tratar como linha ou coluna no elemento principal
    ele é tratado como linha.
    <div class="p-1 m-1 border border-1 border-dark d-flex" style="height: 150px;">
      <div class="bg-primary border border-1 border-dark">Aula de Web</div>
      <div class="bg-success border border-1 border-dark">Aula de Web</div>
      <div class="bg-info border border-1 border-dark align-self-center">Aula de Web</div>
      <div class="bg-warning border border-1 border-dark">Aula de Web</div>
      <div class="bg-danger border border-1 border-dark">Aula de Web</div>
      <div class="bg-secondary border border-1 border-dark">Aula de Web</div>
      <div class="bg-dark border border-1 border-dark">Aula de Web</div>
      <div class="bg-light border border-1 border-dark">Aula de Web</div>      
    </div>
    <br>

    Agora explicitamente colocando o elemento principal como coluna, o aling-self se inverte nos eixos e tratará o start e o end como estamos acostumados.
    Se tivesse o justify content, ele que estaria invertido.
    <div class="p-1 m-1 border border-1 border-dark d-flex flex-column" style="height: 150px;">
      <div class="bg-primary border border-1 border-dark align-self-start">Aula de Web</div>
      <div class="bg-success border border-1 border-dark align-self-end">Aula de Web</div>
      <div class="bg-info border border-1 border-dark align-self-center">Aula de Web</div>
      <div class="bg-warning border border-1 border-dark">Aula de Web</div>
      <div class="bg-danger border border-1 border-dark">Aula de Web</div>
      <div class="bg-secondary border border-1 border-dark">Aula de Web</div>
      <div class="bg-dark border border-1 border-dark">Aula de Web</div>
      <div class="bg-light border border-1 border-dark">Aula de Web</div>      
    </div>
    <br>

    </body>
</html>