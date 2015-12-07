<h3>Administración de palabras</h3><hr>
<?php
  if($_POST['accion'] == "Alta") {
    $_SESSION['diccionario'][$_POST['espanol']] = $_POST['ingles'];
  }

  if($_POST['accion'] == "Modificar") {
    $_SESSION['diccionario'][$_POST['espanol']] = $_POST['ingles'];
  }

  if($_POST['accion'] == "Eliminar") {
    unset($_SESSION['diccionario'][$_POST['espanol']]);
    setcookie($_POST['espanol'], NULL, -1);
  }

  $diccionario = $_SESSION['diccionario'];

  echo "<table>";
  foreach ($diccionario as $espanol => $ingles) {
    ?>
    <tr><td><?=$espanol?></td><td><?=$ingles?></td><td>
    <form action="pagina.php" method="post">
      <input type="hidden" name="ejercicio" value="08_admin_palabras">
      <input type="hidden" name="espanol" value="<?=$espanol?>">
      <input type="submit" name="accion" value="Eliminar">
    </form>
    </td><td>
    <form action="pagina.php" method="post">
      <input type="hidden" name="ejercicio" value="08_modificacion_palabras">
      <input type="hidden" name="espanol" value="<?=$espanol?>">
      <input type="submit" value="Modificar">
    </form>
    </td></tr>
    <?php
  }
  ?>
  </table>

  <hr><table><tr>
  <td>
  <form action="pagina.php" method="post">
    <input type="hidden" name="ejercicio" value="08_alta_palabra">
    <input type="submit" value="Añadir nueva&#x00A;palabra">
  </form>
  </td>
  <td>
  <form action="pagina.php" method="post">
    <input type="hidden" name="ejercicio" value="08">
    <input type="hidden" name="accion" value="borrarCookies">
    <input type="submit" value="Borrar todo e&#x00A;inicializar a diccionario&#x00A;por defecto">
  </form>
  </td>
  <td>
  <form action="pagina.php" method="post">
    <input type="hidden" name="ejercicio" value="08">
    <input type="hidden" name="accion" value="actualizarCookies">
    <input type="submit" value="Guardar cambios&#x00A;y regresar a&#x00A;la pág. principal">
  </form>
  </td>

  </tr></table>