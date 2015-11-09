<h3>Administración de productos</h3><hr>
<?php

  $_SESSION['producto'] = unserialize($_COOKIE['producto']);

  echo "<hr>";
  if (($_POST['accion'] == "Alta") || ($_POST['accion'] == "Modificar")) {
    $_SESSION['producto'][$_POST['codigo']] = [
        "nombre" => "".$_POST['nombre'],
        "precio" => $_POST['precio'],
        "imagen" => $_POST['imagen'],
        "detalle" => "".$_POST['detalle'],
    ];
    $_SESSION['pagina'] = "pagina.php?ejercicio=09_admin_productos";
    header("Location: 09_grabaCookies.php");
  }

  if($_POST['accion'] == "Eliminar") {
    unset($_SESSION['producto'][$_POST['codigo']]);
    unset($_COOKIE['producto'][$_POST['codigo']]);
    $_SESSION['pagina'] = "pagina.php?ejercicio=09_admin_productos";
    header("Location: 09_grabaCookies.php");
    echo "Entra en eliminar";
  }

  echo "<table>";
  foreach ($_SESSION['producto'] as $codigo => $elemento) {
  ?>
    <tr><td>
    <img src="img/<?= $elemento[imagen] ?>" width="300" border="1"><br>
    <?= $elemento[nombre] ?><br>Precio: <?= $elemento[precio] ?> €
    </td>
    <td><?= $elemento[detalle] ?></td>
    <td>
    <form action="pagina.php" method="post">
      <input type="hidden" name="ejercicio" value="09_admin_productos">
      <input type="hidden" name="codigo" value="<?= $codigo ?>">
      <input type="hidden" name="accion" value="Eliminar">
      <input type="submit" value="Eliminar">
    </form>
    <form action="pagina.php" method="post">
      <input type="hidden" name="ejercicio" value="09_modificacion_producto">
      <input type="hidden" name="codigo" value="<?= $codigo ?>">
      <input type="hidden" name="accion" value="Modificar">
      <input type="submit" value="Modificar">
    </form>
    </td>
    
    </tr>
  <?php
  }
  ?>
  </table>

  <hr><table><tr>
  <td>
  <form action="pagina.php" method="post">
    <input type="hidden" name="ejercicio" value="09_alta_producto">
    <input type="submit" value="Añadir nuevo&#x00A;producto">
  </form>
  </td>
  <td>
  <form action="pagina.php" method="post">
    <input type="hidden" name="ejercicio" value="09">
    <input type="hidden" name="accion" value="borrarCookies">
    <input type="submit" value="Borrar todo e&#x00A;inicializar a productos&#x00A;por defecto">
  </form>
  </td>
  <td>

  <form action="pagina.php" method="post">
    <input type="hidden" name="ejercicio" value="09">
    <input type="submit" value="Regresar a la tienda">
  </form>
  </td>

  </tr></table>