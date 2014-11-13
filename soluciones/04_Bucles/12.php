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
                        <br>4. Bucles
        </h2>
      </div>

      <div id="content">
                <?php
        $n = $_POST['n'];
        
                    if (!isset($n)) {
      echo "Este programa muestra los n primeros números de la serie de Fibonacci.<br>";
      echo "Por favor, introduzca n:<br>";
      echo "<form action=\"12.php\" method=\"post\">";
                        echo "<input type=\"text\" name=\"n\">";
                        echo "<input type=\"submit\" value=\"Aceptar\">";
                        echo "</form>";
                    } else {
      $i = 1; $f1 = 0; $f2 = 1;

      switch ($n) {
          case 1:     echo "0"; break;
          case 2:     echo "0 1"; break;
          default:    echo "0 1";
          while($n > 2) {
              $aux = $f1;
              $f1 = $f2;
              $f2 = $aux + $f2;
              echo " $f2";
              $n--;
          }
      }
        }
    ?>

      </div>
      <div id="footer">
        © Luis José Sánchez González
      </div>
  </div>
    </body>
</html>
