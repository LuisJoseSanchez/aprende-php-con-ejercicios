<?php
  session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link href="default.css" rel="stylesheet" type="text/css" />
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
      <h3>Modificación</h3><hr>
      <?php
        $espanol = $_POST['espanol'];
        $ingles = $_SESSION['diccionario'][$espanol];
        
        echo "<form action=\"admin_palabras.php\" method=\"post\">";
        echo "Español: <input type=\"text\" name=\"espanol\" value=\"$espanol\" readonly=\"readonly\"><br>";
        echo "Inglés: <input type=\"text\" name=\"ingles\" value=\"".$ingles."\"><br>";
        echo "<input type=\"submit\" name=\"accion\"  value=\"Modificar\">";
        echo "</form><br><br>";
      ?>
      </div>
      <div id="footer">
        © Luis José Sánchez González
      </div>
  </div>
    </body>
</html>
