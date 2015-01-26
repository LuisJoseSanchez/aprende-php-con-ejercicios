<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
  <?php

    include_once 'Pinguino.php';
    include_once 'Gato.php';
    include_once 'Perro.php';
    include_once 'Lagarto.php';

    $garfield = new Gato("macho", "romano");
    $tom = new Gato("macho");
    $lisa = new Gato("hembra");
    $silvestre = new Gato();

    echo $garfield."<br>";
    echo $tom."<br>";
    echo $lisa."<br>";
    echo $silvestre."<br><hr>";

    $miLoro = new Ave();
    echo $miLoro->aseate()."<br>";
    echo $miLoro->vuela()."<br><hr>";

    $pingu = new Pinguino("hembra");
    echo $pingu->aseate()."<br>";
    echo $pingu->vuela()."<br>";
    echo $pingu->come("palomitas")."<br>";
    echo $pingu->programa()."<br><hr>";

    $laika = new Perro("hembra", "chucho");
    echo $laika->duerme()."<br>";
    echo $laika->dameLaPata()."<br>";
    echo $laika->amamanta()."<br>";
    echo $laika->cuidaCrias()."<br><hr>";

    $godzilla = new Lagarto("macho");
    echo $godzilla->tomaElSol()."<br>";
    echo $godzilla->duerme()."<br><hr>";

  ?>
  </body>
</html>
