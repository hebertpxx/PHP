<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cadastrando</title>
  </head>
  <body>

<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $banco = "empresas";
  $mysqli = new mysqli($host, $user, $pass, $banco);
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    echo $mysqli->host_info . "\n";
?>
<?php
  $nome = $_POST['nameCadastro'];
  $email = $_POST['mailCadastro'];
  $senha = $_POST['passCadastro'];
  $tipo = $_POST['radioEmpresa'];
  $sql = $mysqli->query("INSERT INTO usuarios(nome, email, senha, tipo)
  VALUES('$nome', '$email', '$senha', $tipo)");
?>

  </body>
</html>
