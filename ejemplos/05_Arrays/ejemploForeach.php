<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
      $things = array (30, -7, "Me gusta el queso", 56, "¡eh!", 237);

      foreach ($things as $item)
        echo $item, "<br>"; 
    ?>
  </body>
</html>
