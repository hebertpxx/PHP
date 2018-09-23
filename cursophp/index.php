<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Curso de PHP</title>
  </head>
  <body>

    <form action="index.php" method="get">
      <table>
        <tr><td>Nome:</td><td><input style="width: 100px;" type="text" name="nome" min="1900"></td></tr>
        <tr><td>Ano:</td><td><input style="width: 100px;" type="number" name="a" min="1900" max="9999"></td></tr>
        <tr><td>Idade:</td><td><input style="width: 100px;" type="number" name="b" min="0" max="120"></td></tr>
        <tr><td>Tempo:</td><td><input style="width: 100px;" type="number" name="c" min="0" max="120"></td></tr>
        <tr><td><input type="submit" value="Enviar"></td></tr>
      </table>
    </form>

    <?php
    $nome = $_GET["name"];
    $ano = $_GET["a"];
    $idade = $_GET["b"];
    $tempo = $_GET["c"];

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
