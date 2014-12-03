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
        
        if ((!isset($n)) || ($n < 0)){
        ?>
          Por favor, introduzca un número entero positivo.<br>
          <form action="17.php" method="post">
            <input type="number" name="n" min="0" autofocus=""><br>
            <input type="submit" value="Aceptar">
          </form>
        <?php
        } else {
          $suma = 0;
      
          for ($i = $n + 1; $i < $n + 101; $i++) {
            $suma += $i;
          }
          
          echo "La suma de los 100 números enteros siguientes a $n es $suma";
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
