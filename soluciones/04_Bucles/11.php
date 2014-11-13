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
      echo "Por favor, introduzca un número entero:<br>";
      echo "<form action=\"11.php\" method=\"post\">";
                        echo "<input type=\"text\" name=\"n\">";
                        echo "<input type=\"submit\" value=\"Aceptar\">";
                        echo "</form>";
                    } else {
      echo "<table><tr><td>n</td><td>n<sup>2</sup></td><td>n<sup>3</sup></td></tr>";
      for ($i = $n; $i < $n + 5; $i++)
                            echo "<tr><td>$i</td><td>".$i*$i."</td><td>".$i*$i*$i."</td></tr>";
                        echo "</table>";
        }
    ?>

      </div>
      <div id="footer">
        © Luis José Sánchez González
      </div>
  </div>
    </body>
</html>
