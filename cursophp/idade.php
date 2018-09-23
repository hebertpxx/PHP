<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $nome = $_GET["nome"];
    $ano = $_GET["ano"];
    $idade = $_GET["idade"];
    $tempo = $_GET["tempo"];

    for ($i=0; $i < $tempo; $i++) {
      if ($idade < 16) {
        echo "<p>Em <strong>$ano <span style='color: red;'>$nome</span></strong> tem <strong>$idade</strong> anos. <strong><span style='color: red;'>$nome</span></strong> não pode dirigir e nem votar<p>";
      } elseif ($idade <18) {
        echo "<p>Em <strong>$ano <span style='color: red;'>$nome</span></strong> tem <strong>$idade</strong> anos. <strong><span style='color: red;'>$nome</span></strong> não pode dirigir mas pode votar<p>";
      } else {
        echo "<p>Em <strong>$ano <span style='color: red;'>$nome</span></strong> tem <strong>$idade</strong> anos. <strong><span style='color: red;'>$nome</span></strong> pode dirigir e votar<p>";
      }

      $ano++;
      $idade++;
    }

    ?>
  </body>
</html>
