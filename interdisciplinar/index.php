<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>

    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">

    <script>
      // Dropdown keep open: para impedir o dropdow de fechar ao clicar dentro dele
      $('.dropdown.keep-open').on({
          "shown.bs.dropdown": function() { this.closable = false; },
          "click":             function() { this.closable = true; },
          "hide.bs.dropdown":  function() { return this.closable; }
      });
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
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
               <a class="dropdown-item" href="#">Novo por aqui? Cadastre-se</a>
               <a class="dropdown-item" href="#">Esqueceu sua senha?</a>
              </div>
        </div>
      </div>
    </form>
  </li>
</ul>
  </div>
</nav>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
