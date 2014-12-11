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
          $suma = $_POST['suma']; 
          $numeroDeElementos = $_POST['numeroDeElementos'];

          // Inicializa variables
          if (!isset($n)) {
            $suma = 0;
            $numeroDeElementos = -1;
          }

          if ($suma < 10000) {
            $suma += $n;
            $numeroDeElementos++;
          }
        
          if ((!isset($n)) || ($suma < 10000)) {
          ?>
            Introduzca un número. El programa seguirá pidiendo números mientras la suma de ellos sea inferior a 10000.<br>
            <form action="23.php" method="post">
              <input type="number" name="n" autofocus=""><br>
              <input type="hidden" name="numeroDeElementos" value="<?php echo $numeroDeElementos; ?>">
              <input type="hidden" name="suma" value="<?php echo $suma; ?>">
              <input type="submit" value="Aceptar">
            </form>
          <?php
          }
        
          if ($suma >= 10000) {
            echo "Ha introducido un total de $numeroDeElementos números.<br>";
            echo "La suma total es $suma<br>";
            echo "La media es ".($suma/$numeroDeElementos);
          }
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
