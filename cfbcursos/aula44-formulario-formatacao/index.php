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
      Formatação de formulários
      <a href="http://localhost/cursobootstrap/cfbcursos/" class="btn btn-dark">Lista de aulas</a>
    </h1>

    Um form sem nenhuma formatação:
    <form>
      <label>Nome:</label>
      <input type="text" name="f_nome">
      
      <label>E-mail:</label>
      <input type="email" name="f_email">

      <label>Senha:</label>
      <input type="password" name="f_senha">

      <label>Telefone:</label>
      <input type="text" name="f_fone">

      <label>Nascimento:</label>
      <input type="date" name="f_nascimento">

      <input type="submit" name="btn_enviar" value="enviar">
    </form>
    <br>

    Um form com formatação básica de form-label, form-control e btn:
    <form>
      <label class="form-label">Nome:</label>
      <input class="form-control" type="text" name="f_nome">
      
      <label class="form-label">E-mail:</label>
      <input class="form-control" type="email" name="f_email">

      <label class="form-label">Senha:</label>
      <input class="form-control" type="password" name="f_senha">

      <label class="form-label">Telefone:</label>
      <input class="form-control" type="text" name="f_fone">

      <label class="form-label">Nascimento:</label>
      <input class="form-control" type="date" name="f_nascimento">

      <input class="btn btn-primary" type="submit" name="btn_enviar" value="enviar">
    </form>
    <br>

    Um form com formatação básica de form-label, form-control e btn dentro de containeres com my-3:
    <form>
      <div class="my-3">
        <label class="form-label">Nome:</label>
        <input class="form-control" type="text" name="f_nome">
      </div>
      
      <div class="my-3">
        <label class="form-label">E-mail:</label>
        <input class="form-control" type="email" name="f_email">
      </div>

      <div class="my-3">
        <label class="form-label">Senha:</label>
        <input class="form-control" type="password" name="f_senha">
      </div>

      <div class="my-3">
        <label class="form-label">Telefone:</label>
        <input class="form-control" type="text" name="f_fone">
      </div>

      <div class="my-3">
        <label class="form-label">Nascimento:</label>
        <input class="form-control" type="date" name="f_nascimento">
      </div>

      <div class="my-3">
        <input class="btn btn-primary" type="submit" name="btn_enviar" value="enviar">
      </div>
    </form>
    <br>

    Um form com formatação usando os containeres com my-3 e col:
    <form>
      <div class="my-3">
        <label class="form-label">Nome:</label>
        <input class="form-control" type="text" name="f_nome">
      </div>
      
      <div class="my-3">
        <label class="form-label">E-mail:</label>
        <input class="form-control" type="email" name="f_email">
      </div>

      <div class="my-3">
        <label class="form-label">Senha:</label>
        <input class="form-control" type="password" name="f_senha">
      </div>

      <div class="row">
        <div class="my-3 col">
          <label class="form-label">Telefone:</label>
          <input class="form-control" type="text" name="f_fone">
        </div>
  
        <div class="my-3 col">
          <label class="form-label">Nascimento:</label>
          <input class="form-control" type="date" name="f_nascimento">
        </div>
      </div>

      <div class="my-3">
        <input class="btn btn-primary" type="submit" name="btn_enviar" value="enviar">
      </div>
    </form>
    <br>

    Dá pra colocar classes no forma também (coloquei a p-5):
    <form class="p-5">
      <div class="my-3">
        <label class="form-label">Nome:</label>
        <input class="form-control" type="text" name="f_nome">
      </div>
      
      <div class="my-3">
        <label class="form-label">E-mail:</label>
        <input class="form-control" type="email" name="f_email">
      </div>

      <div class="my-3">
        <label class="form-label">Senha:</label>
        <input class="form-control" type="password" name="f_senha">
      </div>

      <div class="row">
        <div class="my-3 col">
          <label class="form-label">Telefone:</label>
          <input class="form-control" type="text" name="f_fone">
        </div>
  
        <div class="my-3 col">
          <label class="form-label">Nascimento:</label>
          <input class="form-control" type="date" name="f_nascimento">
        </div>
      </div>

      <div class="my-3">
        <input class="btn btn-primary" type="submit" name="btn_enviar" value="enviar">
      </div>
    </form>
    <br>

    Tem classes específicas de elementos do HTML também, como a form-control-color. Aqui sem ela:
    <form class="p-3">
      <div class="my-3">
        <label class="form-label">Nome:</label>
        <input class="form-control" type="text" name="f_nome">
      </div>
      
      <div class="my-3">
        <label class="form-label">E-mail:</label>
        <input class="form-control" type="email" name="f_email">
      </div>

      <div class="my-3">
        <label class="form-label">Senha:</label>
        <input class="form-control" type="password" name="f_senha">
      </div>

      <div class="my-3">
        <label class="form-label">Escolha uma cor:</label>
        <input class="form-control" type="color" name="f_cor">
      </div>

      <div class="row">
        <div class="my-3 col">
          <label class="form-label">Telefone:</label>
          <input class="form-control" type="text" name="f_fone">
        </div>
  
        <div class="my-3 col">
          <label class="form-label">Nascimento:</label>
          <input class="form-control" type="date" name="f_nascimento">
        </div>
      </div>

      <div class="my-3">
        <input class="btn btn-primary" type="submit" name="btn_enviar" value="enviar">
      </div>
    </form>
    <br>

    Tem classes específicas de elementos do HTML também, como a form-control-color. Aqui com ela:
    <form class="p-3">
      <div class="my-3">
        <label class="form-label">Nome:</label>
        <input class="form-control" type="text" name="f_nome">
      </div>
      
      <div class="my-3">
        <label class="form-label">E-mail:</label>
        <input class="form-control" type="email" name="f_email">
      </div>

      <div class="my-3">
        <label class="form-label">Senha:</label>
        <input class="form-control" type="password" name="f_senha">
      </div>

      <div class="my-3">
        <label class="form-label">Escolha uma cor:</label>
        <input class="form-control form-control-color" type="color" name="f_cor">
      </div>

      <div class="row">
        <div class="my-3 col">
          <label class="form-label">Telefone:</label>
          <input class="form-control" type="text" name="f_fone">
        </div>
  
        <div class="my-3 col">
          <label class="form-label">Nascimento:</label>
          <input class="form-control" type="date" name="f_nascimento">
        </div>
      </div>

      <div class="my-3">
        <input class="btn btn-primary" type="submit" name="btn_enviar" value="enviar">
      </div>
    </form>
    <br>

  </body>
</html>