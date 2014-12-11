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
        
          if (!isset($n)){
          ?>
            Introduzca un número entero mayor que 1:
            <form action="27.php" method="post">
              <input type="number" name="n" min="1" autofocus="" required=""><br>
              <input type="submit" value="Aceptar">
            </form>
          <?php
          } else {
            $cuenta = 0;
            $suma = 0;

            for ($i = 1; $i < $n; $i++) {
              if (($i % 3) == 0) {
                echo "$i&nbsp;&nbsp;&nbsp;";
                $cuenta++;
                $suma += $i;
              }
            }
            echo "<br>Desde 1 hasta $n hay $cuenta múltiplos de 3 y suman $suma.";
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
