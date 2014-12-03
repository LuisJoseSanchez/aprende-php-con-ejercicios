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
          $n1 = $_POST['n1'];
          $n2 = $_POST['n2'];
        
          if ((!isset($n1)) || ($n1 == $n2)){
          ?>
            Por favor, introduzca dos números enteros que no sean iguales.<br>
            <form action="18.php" method="post">
              <input type="number" name="n1" autofocus=""><br>
              <input type="number" name="n2"><br>
              <input type="submit" value="Aceptar">
            </form>
          <?php
          } else {
            if ($n1 > $n2) {
                $aux = $n1;
                $n1 = $n2;
                $n2 = $aux;
            }
      
            for ($i = $n1; $i <= $n2; $i+=7) {
              echo "$i  ";
            }
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
