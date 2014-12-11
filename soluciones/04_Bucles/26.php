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
          <br>4. Bucles
        </h2>
      </div>

      <div id="content">
        <?php
          $n = $_POST['n'];
          $digito = $_POST['digito'];
        
          if (!isset($n)){
          ?>
          <form action="26.php" method="post">
            Introduzca un número entero: <input type="number" name="n" min="0" autofocus="" required=""><br>
            Introduzca un dígito: <input type="number" name="digito" min="0" max="9" required=""><br>
            <input type="submit" value="Aceptar">
          </form>
          <?php
          } else {
            $volteado = 0;
            $longitud = 0;
            $posicion = 1;

            echo "Contando de izquierda a derecha, el $digito aparece dentro de $n en las siguientes posiciones: ";

            // le da la vueta al número y calcula la longitud
            $numero = $n;
            if ($numero == 0) {
              $longitud = 1;
            }

            while ($numero > 0) {
              $volteado = ($volteado * 10) + ($numero % 10);
              $numero = floor($numero / 10);
              $longitud++;
            } // while


            // comprueba la posición
            while ($volteado > 0) {
              if (($volteado % 10) == $digito) {
                echo "$posicion&nbsp;&nbsp;&nbsp;";
              }
              $volteado = floor($volteado/10);
              $posicion++;
            } // while
          } // else
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
