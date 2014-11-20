<?php
  session_start();
  
  if (!isset($_POST['n'])) {
    $_SESSION['cuentaNumeros'] = 0;
    $_SESSION['suma'] = 0;
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
        Este programa muestra la suma, el contador de los números introducidos y la media.<br>
        Vaya introduciendo números, el programa parará cuando la suma de ellos supere 10000.<br>
        <?php
					$n = $_POST['n'];

          if (!isset($n) || ($_SESSION['suma'] <= 10000)) {
          ?>
            <form action="03.php" method="post">
              <input type="number" name="n" autofocus>
              <input type="submit" value="Aceptar">
            </form>
          <?php
          }
          
					if (isset($n)) {
						$_SESSION['cuentaNumeros']++;
						$_SESSION['suma'] += $n;
						
            if ($_SESSION['suma'] > 10000) {
								echo "<br><br>Ha introducido ".$_SESSION['cuentaNumeros']." números.<br>";
								echo "La suma es ".$_SESSION['suma']."<br>";
								echo "La media es ".$_SESSION['suma']/$_SESSION['cuentaNumeros']."<br>";
						}
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
