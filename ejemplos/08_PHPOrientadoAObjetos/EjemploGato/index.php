<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
  <?php
    include_once 'Gato.php';

    $garfield = new Gato("macho");

    echo "hola gatito<br>";
    $garfield->maulla();

    echo "toma tarta<br>";
    $garfield->come("tarta selva negra");
    echo "toma pescado, a ver si esto te gusta<br>";
    $garfield->come("pescado");

    $tom = new Gato("macho");

    echo "Tom, toma sopita de verduras<br>";
    $tom->come("sopa de verduras");

    $lisa = new Gato("hembra");

    echo "gatitos, a ver cómo maulláis<br>";
    $garfield->maulla();
    $tom->maulla();
    $lisa->maulla();

    $garfield->peleaCon($lisa);
    $lisa->peleaCon($tom);
    $tom->peleaCon($garfield);
  ?>
  </body>
</html>
