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
    
    <h1>Tabelas com Bootstrap</h1>
    <p>Para tabelas tem que usar a classe "table" pra fazer a formatação, a classe bg não funciona.</p>
    
    <div class="container-fluid flex border border-dark p-3 my-3">
      <table class="table table-striped">
        <p class="h5">Tabela com table-striped</p>
        <thead>
          <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Honda</td>
            <td>HRV</td>
            <td>2016</td>
          </tr>
          <tr>
            <td>Chevrolet</td>
            <td>Onyx</td>
            <td>2019</td>
          </tr>
          <tr>
            <td>Fiat</td>
            <td>Argo</td>
            <td>2018</td>
          </tr>
        </tbody>
      </table>
      <table class="table table-hover">
      <p class="h5">Tabela com table-hover</p>
        <thead>
          <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Honda</td>
            <td>HRV</td>
            <td>2016</td>
          </tr>
          <tr>
            <td>Chevrolet</td>
            <td>Onyx</td>
            <td>2019</td>
          </tr>
          <tr>
            <td>Fiat</td>
            <td>Argo</td>
            <td>2018</td>
          </tr>
        </tbody>
      </table>
      <table class="table table-dark">
      <p class="h5">Tabela com table-dark</p>
        <thead>
          <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Honda</td>
            <td>HRV</td>
            <td>2016</td>
          </tr>
          <tr>
            <td>Chevrolet</td>
            <td>Onyx</td>
            <td>2019</td>
          </tr>
          <tr>
            <td>Fiat</td>
            <td>Argo</td>
            <td>2018</td>
          </tr>
        </tbody>
      </table>
      <table class="table table-bordered">
      <p class="h5">Tabela com table-bordered</p>
        <thead>
          <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Honda</td>
            <td>HRV</td>
            <td>2016</td>
          </tr>
          <tr>
            <td>Chevrolet</td>
            <td>Onyx</td>
            <td>2019</td>
          </tr>
          <tr>
            <td>Fiat</td>
            <td>Argo</td>
            <td>2018</td>
          </tr>
        </tbody>
      </table>
      <table class="table table-borderless">
      <p class="h5">Tabela com table-borderless</p>
        <thead>
          <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Honda</td>
            <td>HRV</td>
            <td>2016</td>
          </tr>
          <tr>
            <td>Chevrolet</td>
            <td>Onyx</td>
            <td>2019</td>
          </tr>
          <tr>
            <td>Fiat</td>
            <td>Argo</td>
            <td>2018</td>
          </tr>
        </tbody>
      </table>
      <table class="table table-dark table-striped table-bordered table-hover">
      <p class="h5">Tabela com table-dark table-striped table-bordered table-hover</p>
        <thead>
          <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Honda</td>
            <td>HRV</td>
            <td>2016</td>
          </tr>
          <tr>
            <td>Chevrolet</td>
            <td>Onyx</td>
            <td>2019</td>
          </tr>
          <tr>
            <td>Fiat</td>
            <td>Argo</td>
            <td>2018</td>
          </tr>
        </tbody>
      </table>





    </div>

  </body>
</html>