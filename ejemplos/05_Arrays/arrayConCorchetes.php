<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
      $color = ["verde", "amarillo", "rojo", "azul", "blanco", "gris"];
      echo "Mañana me pongo una camiseta de color ", $color[rand(0, 5)], ".";
    ?>
  </body>
</html>
