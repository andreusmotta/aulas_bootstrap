<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula de Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
    <style>
      .quadrado{
        display: inline-block;
        width: 80px;
        height: 80px;
        margin: 8px;
        background-color: #f4f4f4;
      }
    </style>
  </head>
  <body class="bg-secondary bg-gradient">

    <h1>
      Bordas
      <a href="http://localhost/cursobootstrap/cfbcursos/" class="btn btn-dark">Lista de aulas</a>
    </h1>

    Sem nada:
    <br><div class="quadrado"></div><br>
    Borda Simples com tamanho 5:
    <br><div class="quadrado border border-5"></div><br>
    Usando o border-0 pra remover lado superior das bordas:
    <br><div class="quadrado border border-5 border-top-0"></div><br>
    Pintando a borda com border-primary:
    <br><div class="quadrado border border-5 border-primary"></div><br>
    Removendo as laterais das bordas:
    <br><div class="quadrado border border-start-0 border-end-0 border-5 border-danger"></div><br>
    Parecido com o anterior, mas na verdade adicionando somente as bordas superiores e inferiores:
    <br><div class="quadrado border-top border-bottom border-5 border-danger"></div><br>
    Bordas arredondadas padrão:
    <br><div class="quadrado border border-dark rounded"></div><br>
    Bordas arredondadas rounded 1:
    <br><div class="quadrado border border-dark rounded-1"></div><br>
    Bordas arredondadas rounded 2:
    <br><div class="quadrado border border-dark rounded-2"></div><br>
    Bordas arredondadas rounded 3:
    <br><div class="quadrado border border-dark rounded-3"></div><br>
    Bordas arredondadas na esquerda:
    <br><div class="quadrado border border-dark rounded-start"></div><br>
    Bordas arredondadas na direita:
    <br><div class="quadrado border border-dark rounded-end"></div><br>
    Bordas arredondadas no topo:
    <br><div class="quadrado border border-dark rounded-top"></div><br>
    Bordas arredondadas abaixo :
    <br><div class="quadrado border border-dark rounded-bottom"></div><br>
    Bordas em círculo:
    <br><div class="quadrado border border-dark rounded-circle"></div><br>
    Bordas em círculo esticado:
    <br><div class="quadrado border border-dark rounded-circle" style="width: 160px;"></div><br>
    Bordas em pílula. Mas tá esticado pra poder ver melhor a diferença com o anterior:
    <br><div class="quadrado border border-dark rounded-pill" style="width: 160px;"></div><br>
    
    



  </body>
</html>