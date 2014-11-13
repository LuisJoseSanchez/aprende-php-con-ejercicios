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
      echo "Introduzca un número para saber si es primo o no.<br>";
      echo "<form action=\"16.php\" method=\"post\">";
                        echo "<input type=\"text\" name=\"n\" size=\"8\"><br>";
                        echo "<input type=\"submit\" value=\"Aceptar\">";
                        echo "</form>";
                    } else {
      $esPrimo = true;
      
            for ($i = 2; $i < $n; $i++)
          if ($n % $i == 0)
        $esPrimo = false;
          
      if ($esPrimo)
          echo "El $n es primo.";
      else
          echo "El $n no es primo.";
        }
    ?>

      </div>
      <div id="footer">
        © Luis José Sánchez González
      </div>
  </div>
    </body>
</html>
