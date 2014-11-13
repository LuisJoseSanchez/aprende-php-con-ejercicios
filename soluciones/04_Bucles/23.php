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
        $suma = $_POST['suma']; 
        $numeroDeElementos = $_POST['numeroDeElementos'];
        
        if (!isset($n)) {
      $suma = 0;
      $numeroDeElementos = -1;
        }
        
        if ($suma < 10000) {
      $suma += $n;
      $numeroDeElementos++;
        }
        
                    if ((!isset($n)) || ($suma < 10000)){
      echo "Introduzca un número. El programa seguirá pidiendo números mientras la suma de ellos sea inferior a 10000.<br>";
      echo "<form action=\"23.php\" method=\"post\">";
                        echo "<input type=\"text\" name=\"n\" size=\"8\"><br>";
      echo "<input type=\"hidden\" name=\"numeroDeElementos\" value=\"$numeroDeElementos\">";
      echo "<input type=\"hidden\" name=\"suma\" value=\"$suma\">";
                        echo "<input type=\"submit\" value=\"Aceptar\">";
                        echo "</form>";
                    }
        
        if ($suma >= 10000) {
      echo "Ha introducido un total de $numeroDeElementos números.<br>";
      echo "La suma total es $suma<br>";
      echo "La media es ".($suma/$numeroDeElementos);
        }
    

    ?>

      </div>
      <div id="footer">
        © Luis José Sánchez González
      </div>
  </div>
    </body>
</html>
