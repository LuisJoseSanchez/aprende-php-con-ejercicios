<?php session_start(); ?>
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
        Este programa calcula la media de los números positivos introducidos.<br>
        Vaya introduciendo números (puede parar introduciendo un número negativo).<br>
        <?php
          $n = $_POST['n'];

          if (!isset($n) || ($n > 0)) {
            $_SESSION['total'] += $n;
            $_SESSION['cuentaNumeros']++;
          ?>
            <form action="01.php" method="post">
              <input type="number" name="n" autofocus>
              <input type="submit" value="Aceptar">
            </form>   
          <?php
          } else {
          ?>
            <br><br>La media de los números introducidos es <?php echo $_SESSION['total'] / ($_SESSION['cuentaNumeros'] - 1); ?>
            <br><br>
            <a href="index.php">>> Volver</a>
          <?php
            session_destroy();
          }
          ?>
	    </div>
      
	    <div id="footer">
		    © Luis José Sánchez González
	    </div>
    </div>
  </body>
</html>
