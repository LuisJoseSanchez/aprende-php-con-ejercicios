<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
      $conexion = new mysqli("localhost", "root", "root");
      if ($conexion->connect_errno > 0) {
        echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
        die ("Error: " . $conexion->connect_error);
      } else {
        echo "Se ha establecido una conexión con el servidor de bases de datos.";
      }
    ?>
  </body>
</html>
