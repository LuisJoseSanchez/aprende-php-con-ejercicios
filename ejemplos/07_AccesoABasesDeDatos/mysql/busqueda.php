<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <form method="post" action="#">
      Buscar en el campo nombre de la tabla de clientes:
      <input type="text" name="buscar">
      <input type="submit" value="Buscar">
    </form>

    <?php
      if (isset($_POST['buscar'])) {
        $buscar = $_POST['buscar'];
        $conexion = mysql_connect("localhost", "root", "root");
        mysql_select_db("banco", $conexion);
        mysql_set_charset('utf8');
        $sql = "SELECT * FROM cliente WHERE nombre LIKE '%$buscar%' ORDER BY nombre";
        $resultado = mysql_query($sql, $conexion);
    ?>
    
    <table border = '1'>
    <tr>
    <td><b>DNI</b></td>
    <td><b>Nombre</b></td>
    <td><b>Dirección</b></td>
    <td><b>Teléfono</b></td>
    </tr>

    <?php
        do {
            echo "<tr>";
            echo "<td>".$registro[dni]."</td>";
            echo "<td>".$registro[nombre]."</td>";
            echo "<td>".$registro[direccion]."</td>";
            echo "<td>".$registro[telefono]."</td>";
            echo "</tr>";
        } while ($registro = mysql_fetch_array($resultado));
      }
    ?>
    </table>
  </body>
</html>
