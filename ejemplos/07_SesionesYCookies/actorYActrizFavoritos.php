<?php
  // Si se envían datos desde el formulario de actores,
  // se actualizan las cookies

  if (isset($_POST["actriz"])) {
    $actriz = $_POST["actriz"];
    $actor = $_POST["actor"];
    setcookie("actriz", $actriz, time() + 3*24*3600);
    setcookie("actor", $actor, time() + 3*24*3600);
  } else if (isset($_COOKIE["actriz"])) {
    $actriz = $_COOKIE["actriz"];
    $actor = $_COOKIE["actor"];
  }

  // Borrado de cookies y variables

  if (isset($_POST["borraCookies"])) {
    setcookie("actriz", NULL, -1);
    setcookie("actor", NULL, -1);
    unset($actriz);
    unset($actor);
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
      if (!isset($actriz)) {
        echo "No has elegido todavía a tus actores favoritos.<br>";
        echo "Utiliza el siguiente formulario para hacerlo.<br>";
      } else {
        echo "<h2>Actriz favorita: ".$actriz."</h2>";
        echo "<h2>Actor favorito: ".$actor."</h2>";
        echo "Introduce nuevos nombres si quieres cambiar tus preferencias.<br>";
      }
    ?>
    <form action="#" method="post">
      Actriz: <input type="text" name ="actriz"><br>
      Actor: <input type="text" name ="actor"><br>
      <input type="submit" value="Aceptar">
    </form>
    <hr>

    <form action="#" method="post">
      <input type="hidden" name="borraCookies" value="si">
      <input type="submit" value="Borrar cookies">
    </form>
  </body>
</html>
