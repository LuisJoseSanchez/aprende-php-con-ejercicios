<h3>Modificación</h3><hr>
<?php
  $espanol = $_POST['espanol'];
  $ingles = $_SESSION['diccionario'][$espanol];
?>
<form action="pagina.php" method="post">
  <input type="hidden" name="ejercicio" value="08_admin_palabras">
  Español: <input type="text" name="espanol" value="<?=$espanol?>" readonly="readonly"><br>
  Inglés: <input type="text" name="ingles" value="<?=$ingles?>" autofocus=""><br>
  <input type="submit" name="accion"  value="Modificar">
</form>
<br><br>