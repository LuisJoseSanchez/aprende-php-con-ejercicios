<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
      include_once 'Matematicas.php';
      
      // Mismo nombre de función con diferente
      // número de parámetros.
      echo Matematicas::opera(2)."<br>";
      echo Matematicas::opera(2, 3)."<br>";
      echo Matematicas::opera(2, 3, 10)."<br>";
      
      // Mismo nombre de función con distintos
      // tipos de parámetros.
      echo Matematicas::opera2(10, 20)."<br>";
      echo Matematicas::opera2("melón", "sandía")."<br>";
    ?>
  </body>
</html>
