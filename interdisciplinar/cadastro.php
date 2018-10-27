<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Novo Usuário</title>

  <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">

  <script>
    // Dropdown keep open: para impedir o dropdow de fechar ao clicar dentro dele
      $('.dropdown.keep-open').on({
          "shown.bs.dropdown": function() { this.closable = false; },
          "click":             function() { this.closable = true; },
          "hide.bs.dropdown":  function() { return this.closable; }
      });

      function enviarCadastro() {
        if (document.getElementById('confirmPassCadastro').value == document.getElementById('passCadastro').value) {
          document.getElementById('buttonCadastrar').className = "btn btn-primary";
          document.getElementById('buttonCadastrar').disabled = false;
        } else {
          document.getElementById('buttonCadastrar').className = "btn btn-primary disabled";
          document.getElementById('buttonCadastrar').disabled = true;
        }
      }
      function isValid() {
        if (document.getElementById('confirmPassCadastro').value == document.getElementById('passCadastro').value) {
          document.getElementById('confirmPass').className = "form-group was-validated"
        } else {
          document.getElementById('confirmPass').className = "form-group"
        }
        enviarCadastro();
      }

    </script>

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <div class="dropdown keep-open">
        <form class="form-inline my-2 my-lg-0 was-validated">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="loginDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <button type="button" class="btn btn-success my-2 my-sm-0">Login</button>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="loginDropdown">

                <div class="form-group col-md-4 mb-3">
                  <label for="userLogin">E-mail</label>
                  <input type="email" class="form-control is-invalid" id="userLogin" placeholder="email@example.com" required name="valor1">
                </div>

                <div class="form-group col-md-4 mb-3">
                  <label for="passwordLogin">Senha</label>
                  <input type="password" class="form-control is-invalid" id="passwordLogin" placeholder="Password" required name="valor1">
                </div>

                <div class="col-md-4 mb-2">
                  <button class="btn btn-primary" type="submit">Entrar</button>
                </div>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="cadastro.php">Novo por aqui? Cadastre-se</a>
                <a class="dropdown-item" href="#">Esqueceu sua senha?</a>
              </div>
            </li>
          </ul>
        </form>
        </div>
      </div>
  </nav>

  <form action="bd/cadastrando.php" method="post" name="signup">
    <div class="form-group was-validated">
      <label for="nameCadastro">Nome da Empresa</label>
      <input type="text" class="form-control col-md-2 mb-3" id="nameCadastro" name="nameCadastro" placeholder="Nome" min="4" maxlength="30" required>
    </div>
    <div class="form-group was-validated">
      <label for="mailCadastro">Email</label>
      <input type="email" class="form-control col-md-2 mb-3" id="mailCadastro" name="mailCadastro" placeholder="mail@example.com" min="4" maxlength="30" required>
    </div>
    <div class="form-group was-validated">
      <label for="passCadastro">Senha</label>
      <input type="password" class="form-control col-md-2 mb-3" id="passCadastro" name="passCadastro" placeholder="Senha" min="4" maxlength="30" required oninput="isValid()">
    </div>
    <div class="form-group" id="confirmPass">
      <label for="confirmPassCadastro">Confirme sua senha</label>
      <input type="password" class="form-control is-invalid col-md-2 mb-3" id="confirmPassCadastro" placeholder="Senha" min="4" maxlength="30" required oninput="isValid()">
    </div>
      <p>Tipo da empresa</p>
      <div class="btn-group btn-group-toggle btn-block mb-3" data-toggle="buttons">
        <label class="btn btn-outline-dark active" for="radioFornecedor">Produtor
        <input type="radio" name="radioEmpresa" id="radioFornecedor" autocomplete="off" value="1" checked>
        </label>
        <label class="btn btn-outline-dark" for="radioEcommerce">E-commerce
        <input type="radio" name="radioEmpresa" id="radioEcommerce" autocomplete="off" value="2">
        </label>
      </div>
    <div class="form-group was-validated">
    <button id="buttonCadastrar" class="btn btn-primary disabled" type="submit">Enviar</button>
    </div>
  </form>


  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>
