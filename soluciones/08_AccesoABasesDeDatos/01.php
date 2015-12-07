<h3 class="text-center">Mantemiento de clientes</h3>
<?php
          
  $conexion = mysql_connect("localhost", "root", "root");
  mysql_select_db("banco", $conexion);
  mysql_set_charset('utf8');

  if($_POST['accion'] == "Nuevo cliente") {
    $inserta = "INSERT INTO cliente VALUES (\"$_POST[dni]\", \"$_POST[nombre]\", \"$_POST[direccion]\", \"$_POST[telefono]\")";
    mysql_query($inserta, $conexion);
  }

  if($_POST['accion'] == "Modificar") {
    $modifica = "UPDATE cliente SET  nombre=\"$_POST[nombre]\", direccion=\"$_POST[direccion]\", telefono=\"$_POST[telefono]\" WHERE dni=\"$_POST[dni]\"";
    mysql_query($modifica, $conexion);
  }

  if($_POST['accion'] == "Eliminar") {
    $borra = "DELETE FROM cliente WHERE dni=\"$_POST[dni]\"";
    mysql_query($borra, $conexion);
  }
          
  // Listado /////////////////////////////////////////////////
  $consulta = mysql_query("SELECT dni, nombre, direccion, telefono FROM cliente", $conexion);
  ?>
  
  <table  class="table table-striped">
    <tr>
      <th>DNI</th>
      <th>Nombre</th>
      <th>Dirección</th>
      <th>Teléfono</th>
      <th></th>
      <th></th>
    </tr>
    
  <?php

    while ($registro = mysql_fetch_array($consulta)) {
      ?>
      <tr>
      <td><?=$registro[dni]?></td>
      <td><?=$registro[nombre]?></td>
      <td><?=$registro[direccion]?></td>
      <td><?=$registro[telefono]?></td>
      <td>
        <form action="pagina.php" method="post">
          <input type="hidden" name="ejercicio" value="01">
          <input type="hidden" name="dni" value="<?=$registro[dni]?>">
          <input type="hidden" name="accion" value="Eliminar">
          <button type="submit" class="btn btn-danger">
          <span class="glyphicon glyphicon-trash"></span> Eliminar
          </button>
        </form>
      </td>
      <td>
        <form action="pagina.php" method="post">
          <input type="hidden" name="ejercicio" value="01_modificar_cliente">
          <input type="hidden" name="dni" value="<?=$registro[dni]?>">  
          <input type="hidden" name="nombre" value="<?=$registro[nombre]?>">
          <input type="hidden" name="direccion" value="<?=$registro[direccion]?>">
          <input type="hidden" name="telefono" value="<?=$registro[telefono]?>">
          <button type="submit" class="btn btn-warning">
          <span class="glyphicon glyphicon-pencil"></span> Modificar
          </button>
        </form>
      </td>            
      </tr>
      <?php
    }
    ?>
        
    <!-- Añadir un nuevo cliente /////////////////////////////////-->
    <form action="pagina.php" method="post">
      <input type="hidden" name="ejercicio" value="01">
      <input type="hidden" name="accion" value="Nuevo cliente">
    <tr>
      <td><input type="text" name="dni" size="10"></td>
      <td><input type="text" name="nombre"></td>
      <td><input type="text" name="direccion"></td>
      <td><input type="text" name="telefono"  size="12"></td>
      <td colspan="2">
        <button type="submit" class="btn btn-success">
        <span class="glyphicon glyphicon-ok"></span> Nuevo cliente
        </button>
      </td>

    </tr>
    </form>
  </table>
