<h3>Nuevo producto</h3><hr>
<form action="pagina.php" method="post">
  <input type="hidden" name="ejercicio" value="09_admin_productos">
  Código: <input type="text" name="codigo" autofocus=""><br>
  Nombre: <input type="text" name="nombre"><br>
  Precio: <input type="number" step="0.01" name="precio"><br>
  Detalle: <textarea name="detalle"></textarea><br>
  Imagen: <input type="text" name="imagen"><br>
  <input type="submit" name="accion" value="Alta">
</form>
<br><br>