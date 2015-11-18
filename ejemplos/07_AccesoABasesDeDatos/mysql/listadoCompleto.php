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
      $conexion = mysql_connect("localhost", "root", "root");
      mysql_select_db("banco", $conexion);
      mysql_set_charset('utf8');
      $consulta = mysql_query("SELECT dni, nombre, direccion, telefono FROM cliente", $conexion);
    ?>
    
    <table border="1">
    <tr>
      <td><b>DNI</b></td>
      <td><b>Nombre</b></td>
      <td><b>Dirección</b></td>
      <td><b>Teléfono</b></td>
    </tr>

    <?php
      while ($registro = mysql_fetch_array($consulta)){
        ?>
        <tr>
          <td><?= $registro[dni] ?></td>
          <td><?= $registro[nombre] ?></td>
          <td><?= $registro[direccion] ?></td>
          <td><?= $registro[telefono] ?></td>
        </tr>
        <?php
      }
    ?>
    </table>
    <br>
    Número de clientes: <?= mysql_num_rows($consulta) ?>

  </body>
</html>
