<h3>Modificación</h3><hr>
<?php
  $elemento = $_SESSION['producto'][$_POST['codigo']];
?>
<form action="pagina.php" method="post">
  <input type="hidden" name="ejercicio" value="09_admin_productos">
  Código: <input type="text" name="codigo" readonly="" value="<?= $_POST['codigo'] ?>"><br>
  Nombre: <input type="text" name="nombre" autofocus="" value="<?= $elemento['nombre'] ?>"><br>
  Precio: <input type="number" step="0.01" name="precio" value="<?= $elemento['precio'] ?>"><br>
  Detalle: <textarea name="detalle" value="<?= $elemento['detalle'] ?>"></textarea><br>
  Imagen: <input type="text" name="imagen" value="<?= $elemento['imagen'] ?>"><br>
  <input type="submit" name="accion" value="Alta">
</form>
<br><br>