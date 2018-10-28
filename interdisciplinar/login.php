<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>

    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">

    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <div class="form-label-group was-validated">
                <input type="email" id="inputEmail" class="form-control" placeholder="Endereço de e-mail" required autofocus="autofocus">
                <label for="inputEmail">Endereço de e-mail</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group was-validated">
                <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
                <label for="inputPassword">Senha</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Lembrar de mim
                </label>
              </div>
            </div>
            <a class="btn btn-primary btn-block" href="index.html">Entrar</a>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.html">Registrar uma conta</a>
            <a class="d-block small" href="forgot-password.html">Esqueceu sua senha?</a>
          </div>
        </div>
      </div>
    </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

  </body>

</html>
