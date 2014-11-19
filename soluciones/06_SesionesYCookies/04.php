<?php
  session_start();
  if (!isset($_SESSION['logeado']))
    $_SESSION['logeado'] = false;
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
                <?php
          // Control de acceso
          if (!$_SESSION['logeado']) {
            if (!isset($_POST['usuario'])) {
              echo "Debe iniciar sesión para acceder a la aplicación<br><br>";
              echo "<form action=\"04.php\" method=\"post\">";
              echo "Usuario: <input type=\"text\" name=\"usuario\" autofocus><br>";
              echo "Contraseña: <input type=\"text\" name=\"contrasena\"><br>";
              echo "<input type=\"submit\" value=\"Iniciar sesión\">";
              echo "</form>";
            } else {
              if (($_POST['usuario'] == "tux") && ($_POST['contrasena'] == "xut")) {
                echo "Sesión iniciada como usuario tux<br><br>";
                $_SESSION['logeado'] = true;
                echo "<META HTTP-EQUIV='refresh' CONTENT='0; URL=$PHP_SELF'>"; // recarga la página
              } else {
                echo "Contraseña incorrecta. Inténtelo de nuevo.<br><br>";
                echo "<form action=\"04.php\" method=\"post\">";
                echo "Usuario: <input type=\"text\" name=\"usuario\" autofocus><br>";
                echo "Contraseña: <input type=\"text\" name=\"contrasena\"><br>";
                echo "<input type=\"submit\" value=\"Iniciar sesión\">";
                echo "</form>";
              }
            }
          } else {
            // Ejercicio 1 de la relación de Arrays /////////
            for ($i = 0; $i < 20; $i++)
            $numero[] = rand(0,100);

            foreach ($numero as $elemento) {
              $cuadrado[] = $elemento * $elemento;
              $cubo[] = $elemento * $elemento * $elemento;
            }

            echo "<table>";
            echo "<tr><td>Número</td><td>Cuadrado</td><td>Cubo</td></tr>";
            for ($i = 0; $i < 20; $i++) {
              echo "<tr><td>".$numero[$i]."</td>";
              echo "<td>".$cuadrado[$i]."</td>";
              echo "<td>".$cubo[$i]."</td></tr>";
            }
            echo "</table>";
            //////////////////////////////////////////////////
          }
            
        ?>
      </div>
      <div id="footer">
        © Luis José Sánchez González
      </div>
  </div>
    </body>
</html>
