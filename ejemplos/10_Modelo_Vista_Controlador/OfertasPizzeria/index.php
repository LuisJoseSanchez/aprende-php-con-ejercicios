<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <h1>Pizzeria Peachepe</h1>
    <a href="nuevo.php">Nueva oferta</a>
    <hr>
    <?php
      require_once 'Oferta.php';

      $ofertas = Oferta::getOfertas();
      
      foreach($ofertas as $oferta)  {
        ?>
        <h3><?=$oferta->getTitulo()?></h3>
        <img src="imagenes/<?=$oferta->getImagen()?>" width="400"><br>
        <p><?=$oferta->getDescripcion()?></p><br>
        <a href="borrar.php?id=<?=$oferta->getId()?>">Borrar</a>
        <?php
      }
    ?>
    </body>
</html>
