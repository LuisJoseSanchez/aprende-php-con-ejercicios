<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <h2>
      Base de datos <u>banco</u><br>
      Tabla <u>cliente</u><br>
    </h2>
    <?php
      $conexion = new mysqli("localhost", "root", "root");
      if ($conexion->connect_errno > 0) {
        echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
        die ("Error: " . $conexion->connect_error);
      } else {
        $conexion->select_db("banco");
        $conexion->set_charset("utf8");

        $consulta = $conexion->query("SELECT dni, nombre, direccion, telefono FROM cliente");
          
        ?>
        <table border="1">
        <tr>
          <td><b>DNI</b></td>
          <td><b>Nombre</b></td>
          <td><b>Dirección</b></td>
          <td><b>Teléfono</b></td>
        </tr>

        <?php
        while ($cliente = $consulta->fetch_object()){
          ?>
          <tr>
            <td><?= $cliente->dni ?></td>
            <td><?= $cliente->nombre ?></td>
            <td><?= $cliente->direccion ?></td>
            <td><?= $cliente->telefono ?></td>
          </tr>
          <?php
        }
      }
      $conexion->close();
    ?>
  </body>
</html>
