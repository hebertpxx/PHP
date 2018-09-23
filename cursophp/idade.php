<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <?php
      $nome = isset($_GET["nome"])?$_GET["nome"]:"Ninguém";
      $ano = isset($_GET["ano"])?$_GET["ano"]:0;
      $idade = isset($_GET["idade"])?$_GET["idade"]:0;
      $tempo = isset($_GET["tempo"])?$_GET["tempo"]:0;
      $color = isset($_GET["color"])?$_GET["color"]:"black";
    ?>
    <meta charset="utf-8">
    <title><?php echo "Idade de ", $nome; ?></title>
    <style>
      span {
        color: <?php echo $color; ?>;
      }
    </style>
  </head>
  <body>

    <a href="index.html">Calcular outra vez</a>

    <?php

    for ($i=0; $i < $tempo; $i++) {
      if ($idade < 16) {
        echo "<p>Em <strong>$ano <span>$nome</span></strong> tem <strong>$idade</strong> anos. <strong><span>$nome</span></strong> não pode dirigir e nem votar<p>";
      } elseif ($idade <18) {
        echo "<p>Em <strong>$ano <span>$nome</span></strong> tem <strong>$idade</strong> anos. <strong><span>$nome</span></strong> não pode dirigir mas pode votar<p>";
      } else {
        echo "<p>Em <strong>$ano <span>$nome</span></strong> tem <strong>$idade</strong> anos. <strong><span>$nome</span></strong> pode dirigir e votar<p>";
      }

      $ano++;
      $idade++;
    }

    ?>
  </body>
</html>
