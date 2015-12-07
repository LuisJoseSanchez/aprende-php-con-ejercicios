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
        $conexion->select_db("banco");
        $conexion->set_charset("utf8");

        $consulta = $conexion->query('SELECT * FROM empleado WHERE dni="13579"');
          
        $empleado = $consulta->fetch_object();
        
        echo "Nombre: " . $empleado->nombre . "<br>";
        echo "Cargo: " . $empleado->cargo . "<br>";
        echo "Sueldo: " . $empleado->sueldo . "€<br>";
      }
    ?>
  </body>
</html>