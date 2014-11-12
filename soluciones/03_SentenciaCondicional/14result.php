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
          <br>3. Sentencia condicional
        </h2>
      </div>

      <div id="content">
        <?php
          $n = $_POST['n'];
          
          if (($n % 2) == 0) {
            echo "El número introducido es par";
          } else {
            echo "El número introducido es impar";
          }

          if (($n % 5) == 0) {
            echo " y divisible entre 5.";
          } else {
            echo " y no es divisible entre 5.";
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
