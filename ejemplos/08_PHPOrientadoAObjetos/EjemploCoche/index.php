<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
      include_once 'Coche.php';

      $cocheDeLuis = new Coche("Saab", "93");
      $cocheDeJuanK = new Coche("Toyota", "Avensis");

      $cocheDeLuis->recorre(30);
      $cocheDeLuis->recorre(40);
      $cocheDeLuis->recorre(220);
      $cocheDeJuanK->recorre(60);
      $cocheDeJuanK->recorre(150);
      $cocheDeJuanK->recorre(90);
      echo "El coche de Luis ha recorrido " . $cocheDeLuis->getKilometraje() . "Km<br>";
      echo "El coche de Juan Carlos ha recorrido " . $cocheDeJuanK->getKilometraje() . "Km<br>";
      echo "El kilometraje total ha sido de " . Coche::getKilometrajeTotal() . "Km";  
    ?>
  </body>
</html>
