<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
      $conexion = mysql_connect("localhost", "root", "root");
      if ($conexion) {
        echo "Se ha establecido una conexión con el servidor de bases de datos.";
      } else {
        echo "No se ha podido establecer conexión con el servidor de bases de datos.";
      }
    ?>
  </body>
</html>
