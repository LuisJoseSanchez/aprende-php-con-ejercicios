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
        
                    if (!isset($n)){
      echo "Por favor, introduzca un número entero:";
      echo "<form action=\"25.php\" method=\"post\">";
                        echo "<input type=\"text\" name=\"n\" size=\"8\"><br>";
                        echo "<input type=\"submit\" value=\"Aceptar\">";
                        echo "</form>";
                    } else {
      $volteado = 0;

      $numero = $n;
      while ($numero > 0) {
        $volteado = ($volteado * 10) + ($numero % 10);
        $numero = floor($numero/10);
      } // while

      echo "Si le damos la vuelta al $n tenemos el $volteado";
        }
    ?>

      </div>
      <div id="footer">
        © Luis José Sánchez González
      </div>
  </div>
    </body>
</html>
