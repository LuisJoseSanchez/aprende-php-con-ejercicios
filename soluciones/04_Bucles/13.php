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
        $i = $_POST['i'];
        $n = $_POST['n'];
        $positivos = $_POST['positivos'];
        $negativos = $_POST['negativos'];

        if (!isset($i)) {
          $i = 1;
          $positivos = 0;
          $negativos = 0;
        } else {
          $i++;
          if ($n < 0)
            $negativos++;
        else
            $positivos++;
        }
        
        if ($i == 1) {
      echo "Este programa lee una lista de diez números y determina cuántos son positivos, ";
      echo " y cuántos son negativos.<br>";
        }

        if ($i < 11) {
      echo "<form action=\"13.php\" method=\"post\">";
                        echo "Número $i <input type=\"text\" name=\"n\">";
      echo "<input type=\"hidden\" name=\"i\" value=\"$i\">";
                        echo "<input type=\"hidden\" name=\"positivos\" value=\"$positivos\">";
      echo "<input type=\"hidden\" name=\"negativos\" value=\"$negativos\">";
                        echo "<input type=\"submit\" value=\"Aceptar\">";
                        echo "</form>";
        }
        
        if ($i == 11) {
      echo "Se han introducido $positivos números positivos y $negativos números negativos.<br>";
        }
    ?>

      </div>
      <div id="footer">
        © Luis José Sánchez González
      </div>
  </div>
    </body>
</html>
