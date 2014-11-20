<?php
	session_start();
	if (!isset($_SESSION['logeado'])) {
		$_SESSION['logeado'] = false;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
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
          <br>6. Sesiones y cookies
        </h2>
      </div>

      <div id="content">
        <?php
					// Formulario de login
          if (!$_SESSION['logeado']) {
          ?>
            Debe iniciar sesión para acceder a la aplicación<br><br>
            <form action="04.php" method="post">
              Usuario: <input type="text" name="usuario" autofocus><br>
              Contraseña: <input type="password" name="contrasena"><br>
              <input type="submit" value="Iniciar sesión">
            </form>
          <?php
          }
        
          // Comprueba nombre de usuario y contraseña
          if (isset($_POST['usuario'])) {
            if (($_POST['usuario'] == "tux") && ($_POST['contrasena'] == "xut")) {
              $_SESSION['logeado'] = true;
              header("refresh: 0;"); // recarga la página
            } else {
              echo "Contraseña incorrecta. Inténtelo de nuevo.<br><br>";
              header("refresh: 2;");
            }
          }

          
          if ($_SESSION['logeado']) {
						// Ejercicio 1 de la relación de Arrays /////////
						for ($i = 0; $i < 20; $i++) {
              $numero[] = rand(0,100);
            }

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
        <br><br>
        <a href="index.php">>> Volver</a>
	    </div>
	    <div id="footer">
		    © Luis José Sánchez González
	    </div>
	</div>
    </body>
</html>