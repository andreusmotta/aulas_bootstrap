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
      Formatação de Formulários
      <a href="http://localhost/cursobootstrap/cfbcursos/" class="btn btn-dark">Lista de aulas</a>
    </h1>
    
    Um formulário mais incrementado com muitos recursos. Verifique o was-validated e os elementos principalmente os de e-mail, senha, checkbox e range:
    <form class="p-3 was-validated">
      <div class="my-3">
        <label class="form-label">Digite seu nome:</label>
        <div class="input-group">
          <span class="input-group-text">Nome</span>
          <input class="form-control" type="text" name="f_nome">
        </div>
      </div>
      
      <div class="my-3">
        <div class="form-floating mb-3 mt-3">
          <input class="form-control" type="email" id="email" placeholder="Digite aqui o e-mail" name="f_email">
          <label for="email">E-mail:</label>
        </div>
      </div>

      <div class="my-3">
        <label class="form-label">Senha:</label>
        <input class="form-control" type="password" name="f_senha" required>
        <div class="valid-feedback">Senha Ok</div>
        <div class="invalid-feedback">Sem senha</div>
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
        <label class="form-label">Escolha o tipo de transporte:</label>
        <select class="form-select" name="f_transporte">
          <option>Carro</option>
          <option>Motocicleta</option>
          <option>Avião</option>
          <option>Trem</option>
          <option>Navio</option>
        </select>
      </div>

      <div class="my-3">
        <label class="form-label">Selecione o meio de deslocamento:</label>
        <div>
          <input class="form-check-input" type="checkbox" name="chk_terrestre" value="terrestre">
          <label class="form-check-label">Terrestre</label>
        </div>
        <div>
          <input class="form-check-input" type="checkbox" name="chk_aereo" value="aereo">
          <label class="form-check-label">Aéreo</label>
        </div>
        <div>
          <input class="form-check-input" type="checkbox" name="chk_maritimo" value="maritimo">
          <label class="form-check-label">Marítimo</label>
        </div>
      </div>

      <div class="my-3">
        <label class="form-label">Selecione a distância máxima:</label>
        <input class="form-range" type="range" name="f_distancia">
      </div>

      <div class="my-3">
        <input class="btn btn-primary" type="submit" name="btn_enviar" value="enviar">
      </div>
    </form>
    <br>

    
  </body>
</html>