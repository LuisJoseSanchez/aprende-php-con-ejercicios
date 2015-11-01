<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
      $conexion = mysql_connect("localhost", "root", root);
      
      mysql_select_db("banco", $conexion);
      mysql_set_charset('utf8');
      
      $consulta = mysql_query('SELECT * FROM empleado WHERE dni="13579"', $conexion);
      
      echo "Nombre: " . mysql_result($consulta, 0, "nombre") . "<br>";
      echo "Cargo: " . mysql_result($consulta, 0, "cargo") . "<br>";
      echo "Sueldo: " . mysql_result($consulta, 0, "sueldo") . "€<br>";
    ?>
  </body>
</html>