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
      Align Content vs Justify Content
      <a href="http://localhost/cursobootstrap/cfbcursos/" class="btn btn-dark">Lista de aulas</a>
    </h1>
    <p>O align-content e o justify-content trabalham juntos em eixos diferentes. Se usar o flex-row que tem o eixo horizontal como primário, o 
    align-content e o justify-content terão uma orientação. Se usar o flex-column que tem o eixo vertical como primário, a orientação dos dois 
    será invertida. Basicamente é pra usar um quando se quer um ajuste, e se precisa de ajuste em outro eixo, use o outro.

    </p>

    Alinhamento nativo dos containeres:
    <div class="p-1 m-1 border border-1 border-dark" style="height: 300px;">
      <div class="bg-primary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-success border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-info border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-warning border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-danger border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-secondary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-dark border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-light border border-1 border-dark">Aulas de Bootstrap</div>      
  </div>
  <br>

    Usando d-inline-block o alinhamento será somente de acordo com o tamanho do conteúdo do container:
    <div class="p-1 m-1 border border-1 border-dark">
      <div class="bg-primary border border-1 border-dark d-inline-block">Aulas de Bootstrap</div>
      <div class="bg-success border border-1 border-dark d-inline-block">Aulas de Bootstrap</div>
      <div class="bg-info border border-1 border-dark d-inline-block">Aulas de Bootstrap</div>      
  </div>
  <br>

  Alinhamento com d-flex, ele quebra a linha do conteúdo para caber na tela:
    <div class="p-1 m-1 border border-1 border-dark d-flex" style="height: 300px;">
      <div class="bg-primary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-success border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-info border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-warning border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-danger border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-secondary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-dark border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-light border border-1 border-dark">Aulas de Bootstrap</div>      
      <div class="bg-primary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-success border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-info border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-warning border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-danger border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-secondary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-dark border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-light border border-1 border-dark">Aulas de Bootstrap</div>      
  </div>
  <br>

  Alinhamento com d-flex e flex-wrap, ele mantém o conteúdo e joga o container pra próxima linha. 
  Pode usar o no-wrap também pra ter o mesmo efeito que acima.
    <div class="p-1 m-1 flex-wrap border border-1 border-dark d-flex" style="height: 300px;">
      <div class="bg-primary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-success border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-info border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-warning border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-danger border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-secondary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-dark border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-light border border-1 border-dark">Aulas de Bootstrap</div>      
      <div class="bg-primary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-success border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-info border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-warning border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-danger border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-secondary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-dark border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-light border border-1 border-dark">Aulas de Bootstrap</div>      
  </div>
  <br>
  
  Alinhamento usando justify-content-between coloca espaço entre os containeres(pode precisar aumentar horizontalmente a janela pra ver):
    <div class="p-1 m-1 d-flex justify-content-between border border-1 border-dark" style="height: 300px;">
      <div class="bg-primary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-success border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-info border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-warning border border-1 border-dark">Aulas de Bootstrap</div>
  </div>
  <br>
  
  Alinhamento usando justify-content-between e o flex-column coloca espaço entre os containeres verticalmente:
    <div class="p-1 m-1 d-flex flex-column justify-content-between border border-1 border-dark" style="height: 300px;">
      <div class="bg-primary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-success border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-info border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-warning border border-1 border-dark">Aulas de Bootstrap</div>
  </div>
  <br>
  
  Alinhamento usando flex-row e justify-content-end joga tudo pro final(pode precisar aumentar horizontalmente a janela pra ver):
    <div class="p-1 m-1 d-flex flex-row justify-content-end border border-1 border-dark" style="height: 300px;">
      <div class="bg-primary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-success border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-info border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-warning border border-1 border-dark">Aulas de Bootstrap</div>    
  </div>
  <br>
  
  Alinhamento usando flex-row e justify-content-center joga tudo pro meio(pode precisar aumentar horizontalmente a janela pra ver):
    <div class="p-1 m-1 d-flex flex-row justify-content-center border border-1 border-dark" style="height: 300px;">
      <div class="bg-primary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-success border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-info border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-warning border border-1 border-dark">Aulas de Bootstrap</div>    
  </div>
  <br>
  
  Alinhamento usando flex-row e justify-content-start joga tudo pro meio(pode precisar aumentar horizontalmente a janela pra ver):
    <div class="p-1 m-1 d-flex flex-row justify-content-start border border-1 border-dark" style="height: 300px;">
      <div class="bg-primary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-success border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-info border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-warning border border-1 border-dark">Aulas de Bootstrap</div>    
  </div>
  <br>

  Alinhamento com d-flex e flex-wrap, adicionando o align-content-between pra alinhar o outro eixo:
    <div class="p-1 m-1 flex-wrap flex-row align-content-between justify-content-start border border-1 border-dark d-flex" style="height: 300px;">
      <div class="bg-primary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-success border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-info border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-warning border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-danger border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-secondary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-dark border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-light border border-1 border-dark">Aulas de Bootstrap</div>      
      <div class="bg-primary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-success border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-info border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-warning border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-danger border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-secondary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-dark border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-light border border-1 border-dark">Aulas de Bootstrap</div>      
      <div class="bg-primary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-success border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-info border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-warning border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-danger border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-secondary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-dark border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-light border border-1 border-dark">Aulas de Bootstrap</div>      
      <div class="bg-primary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-success border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-info border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-warning border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-danger border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-secondary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-dark border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-light border border-1 border-dark">Aulas de Bootstrap</div>      
  </div>
  <br>

  Alinhamento com d-flex e flex-wrap, adicionando o align-content-around que coloca espaço no começo e no fim:
    <div class="p-1 m-1 flex-wrap flex-row align-content-around justify-content-start border border-1 border-dark d-flex" style="height: 300px;">
      <div class="bg-primary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-success border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-info border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-warning border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-danger border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-secondary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-dark border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-light border border-1 border-dark">Aulas de Bootstrap</div>      
      <div class="bg-primary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-success border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-info border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-warning border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-danger border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-secondary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-dark border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-light border border-1 border-dark">Aulas de Bootstrap</div>      
      <div class="bg-primary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-success border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-info border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-warning border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-danger border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-secondary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-dark border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-light border border-1 border-dark">Aulas de Bootstrap</div>      
      <div class="bg-primary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-success border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-info border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-warning border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-danger border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-secondary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-dark border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-light border border-1 border-dark">Aulas de Bootstrap</div>      
  </div>
  <br>

  Alinhamento com d-flex e flex-wrap, adicionando o align-content-around e o justify-content-around bota um espaço em volta de todos:
    <div class="p-1 m-1 flex-wrap flex-row align-content-around justify-content-around border border-1 border-dark d-flex" style="height: 300px;">
      <div class="bg-primary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-success border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-info border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-warning border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-danger border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-secondary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-dark border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-light border border-1 border-dark">Aulas de Bootstrap</div>      
      <div class="bg-primary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-success border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-info border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-warning border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-danger border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-secondary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-dark border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-light border border-1 border-dark">Aulas de Bootstrap</div>      
      <div class="bg-primary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-success border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-info border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-warning border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-danger border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-secondary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-dark border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-light border border-1 border-dark">Aulas de Bootstrap</div>      
      <div class="bg-primary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-success border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-info border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-warning border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-danger border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-secondary border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-dark border border-1 border-dark">Aulas de Bootstrap</div>
      <div class="bg-light border border-1 border-dark">Aulas de Bootstrap</div>      
  </div>
  <br> 
  
    </body>
</html>