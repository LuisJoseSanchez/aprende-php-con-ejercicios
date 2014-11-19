<?php session_start(); ?>
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
               Este programa nos dice cuántos números se han introducido, la media de los impares y el mayor de los pares.<br>
               Vaya introduciendo números (puede parar introduciendo un número negativo).<br>
                <?php
          $n = $_POST['n'];

          if (isset($n)) {
            if ($n < 0) {
                echo "<br><br>Ha introducido ".$_SESSION['cuentaNumeros']." números.<br>";
                echo "La media de los impares es ".$_SESSION['sumaImpares']/$_SESSION['cuentaImpares']."<br>";
                echo "El mayor de los pares es ".$_SESSION['mayorPar']."<br>";
            } else {
                $_SESSION['cuentaNumeros']++;
                
                if (($n % 2) == 0) { // Par
                  if ($n > $_SESSION['mayorPar'])
                    $_SESSION['mayorPar'] = $n;
                } else { // Impar
                  $_SESSION['sumaImpares'] += $n;
                  $_SESSION['cuentaImpares']++;
                }
                  
                echo "<form action=\"02.php\" method=\"post\">";
                echo "<input type=\"text\" name=\"n\" autofocus>";
                echo "<input type=\"submit\" value=\"Aceptar\">";
                echo "</form>";
            }
          } else {
            $_SESSION['cuentaNumeros'] = 0;
            $_SESSION['sumaImpares'] = 0;
            $_SESSION['cuentaImpares'] = 0;
            echo "<form action=\"02.php\" method=\"post\">";
            echo "<input type=\"text\" name=\"n\" autofocus>";
            echo "<input type=\"submit\" value=\"Aceptar\">";
            echo "</form>";
          }
        ?>
      </div>
      <div id="footer">
        © Luis José Sánchez González
      </div>
  </div>
    </body>
</html>
