<?php
  session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link href="default2.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
  <div id="container">
      <div id="header">
        <h1>
          APRENDE PHP CON EJERCICIOS
        </h1>
                    <h2>
                            SOLUCIONES A LOS EJERCICIOS
                    </h2>
        <h2>
                        <br>6. Sesiones y Cookies
        </h2>
      </div>

      <div id="content">  
      <h3>Administración de palabras</h3><hr>
      <?php
        if($_POST['accion'] == "Alta")
          $_SESSION['diccionario'][$_POST['espanol']] = $_POST['ingles'];
        
        if($_POST['accion'] == "Modificar")
          $_SESSION['diccionario'][$_POST['espanol']] = $_POST['ingles'];

        if($_POST['accion'] == "Eliminar") {
          unset($_SESSION['diccionario'][$_POST['espanol']]);
          setcookie($_POST['espanol'], NULL, -1);
        }
        
        $diccionario = $_SESSION['diccionario'];
        
        echo "<table>";
        foreach ($diccionario as $espanol => $ingles) {
          echo "<tr><td>$espanol</td><td>$ingles</td><td>";
          echo "<form action=\"admin_palabras.php\" method=\"post\">";
          echo "<input type=\"hidden\" name=\"espanol\" value=\"$espanol\">";
          echo "<input type=\"submit\" name=\"accion\" value=\"Eliminar\">";
          echo "</form>";  
          echo "</td><td><form action=\"modificacion_palabras.php\" method=\"post\">";
          echo "<input type=\"hidden\" name=\"espanol\" value=\"$espanol\">";
          echo "<input type=\"submit\" value=\"Modificar\">";
          echo "</form>";
          echo "</td></tr>";
        }
        echo "</table>";
      ?>

      <hr><table><tr>
      <td>
      <form action="alta_palabra.php" method="link">
        <input type="submit" value="Añadir nueva&#x00A;palabra">
      </form>
      </td>
      <td>
      <form action="07.php" method="post">
        <input type="hidden" name="accion" value="borrarCookies">
        <input type="submit" value="Borrar todo e&#x00A;inicializar a diccionario&#x00A;por defecto">
      </form>
      </td>
      <td>
      <form action="07.php" method="post">
        <input type="hidden" name="accion" value="actualizarCookies">
        <input type="submit" value="Guardar cambios&#x00A;y regresar a&#x00A;la pág. principal">
      </form>
      </td>
      
      </tr></table>
      </div>
      <div id="footer">
        © Luis José Sánchez González
      </div>
  </div>
    </body>
</html>
