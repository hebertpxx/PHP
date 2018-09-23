<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Curso de PHP</title>
  </head>
  <body>

    <form action="idade.php" method="get">
      <table>
        <tr><td>Nome:</td><td><input style="width: 110px;" type="text" name="nome" min="1900"></td></tr>
        <tr><td>Ano:</td><td><input style="width: 110px;" type="number" name="ano" min="1900" max="9999"></td></tr>
        <tr><td>Idade:</td><td><input style="width: 110px;" type="number" name="idade" min="0" max="120"></td></tr>
        <tr><td>Tempo:</td><td><input style="width: 110px;" type="number" name="tempo" placeholder="Tempo em Anos" min="0" max="120"></td></tr>
        <tr><td><input type="submit" value="Enviar"></td></tr>
      </table>
    </form>

    <?php






     ?>
  </body>
</html>
