<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Novo Usuário</title>

  <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">

  <link href="css/sb-admin.css" rel="stylesheet">

  <script>

      function enviarCadastro() {
        if (document.getElementById('confirmPassword').value == document.getElementById('inputPassword').value) {
          document.getElementById('buttonCadastrar').className = "btn btn-primary btn-block";
          document.getElementById('buttonCadastrar').disabled = false;
        } else {
          document.getElementById('buttonCadastrar').className = "btn btn-primary btn-block disabled";
          document.getElementById('buttonCadastrar').disabled = true;
        }
      }
      function isValid() {
        if (document.getElementById('confirmPassword').value == document.getElementById('inputPassword').value) {
          document.getElementById('confirmPass').className = "form-label-group was-validated"
        } else {
          document.getElementById('confirmPass').className = "form-label-group"
        }
        enviarCadastro();
      }

    </script>

    <?php
    $mail = isset($_POST['email'])?$_POST['email']:"";
    ?>

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Registrar uma conta</div>
      <div class="card-body">
        <form  action="bd/cadastrando.php" method="post" name="signup">
          <div class="form-group was-validated">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="mail" id="firstName" name="nameCadastro" class="form-control" placeholder="Nome da Empresa" required autofocus="autofocus">
                  <label for="firstName">Nome da Empresa</label>
                </div>
              </div>

            </div>
          </div>
          <div class="form-group was-validated">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="mailCadastro" class="form-control" value="<?php echo $mail; ?>" placeholder="Endereço de e-mail" required>
              <label for="inputEmail">Endereço de e-mail</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group was-validated">
                  <input type="password" id="inputPassword" name="passCadastro" class="form-control" placeholder="Password" required oninput="isValid()">
                  <label for="inputPassword">Senha</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group" id="confirmPass">
                  <input type="password" id="confirmPassword" name="confirmPassCadastro" class="form-control is-invalid" placeholder="Confirm password" required oninput="isValid()">
                  <label for="confirmPassword">Confirmar senha</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label>Tipo da empresa</label>
                  <div class="btn-group btn-block btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-outline-success active" for="radioFornecedor" style="width: 50%;">Produtor
                    <input type="radio" name="radioEmpresa" id="radioFornecedor" autocomplete="off" value="1" checked>
                    </label>
                    <label class="btn btn-outline-success" for="radioEcommerce" style="width: 50%;">E-commerce
                    <input type="radio" name="radioEmpresa" id="radioEcommerce" autocomplete="off" value="2">
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <button id="buttonCadastrar" class="btn btn-primary btn-block" type="submit" disabled>Registrar</button>

        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Página de login</a>
          <a class="d-block small" href="forgot-password.html">Esqueceu sua senha?</a>
        </div>
      </div>
    </div>
  </div>

      </div>
    </div>
  </div>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>
