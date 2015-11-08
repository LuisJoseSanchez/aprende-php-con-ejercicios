<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
      try {
        $conexion = new PDO("mysql:host=localhost", "root", "root");
        echo "Se ha establecido una conexión con el servidor de bases de datos.";
      } catch (PDOException $e) {
        echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
        die ("Error: " . $e->getMessage());
      }
    ?>
  </body>
</html>
