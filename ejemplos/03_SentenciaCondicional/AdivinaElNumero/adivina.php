<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
      $oportunidades = $_POST['oportunidades'];
      $numeroIntroducido = $_POST['numeroIntroducido'];

      $numeroSecreto = 24;

      if ($numeroIntroducido == $numeroSecreto) {
        echo "Enhorabuena, has acertado el número.";
      } else {
        if ($oportunidades == 0) {
          echo "Lo siento, has agotado todas tus oportunidades. Has perdido";
        } else {
          if ($numeroIntroducido!=555) {
            if ($numeroSecreto > $numeroIntroducido)
              echo "El número que estoy pensando es mayor que el número que has introducido.<br>";
            else
              echo "El número que estoy pensando es menor que el número que has introducido.<br>";
          }
        echo "Te quedan ", $oportunidades, " oportunidades para adivinar el número.<br>";
        $oportunidades--;
        echo "Introduce un número del 0 al 100";
        echo '<form action="adivina.php" method="post">';
        echo '<input type="text" name="numeroIntroducido">';
        echo '<input type="hidden" name="oportunidades" value="', $oportunidades, '">';
        echo '<input type="submit" value="Continuar">';
        echo '</form>';
        }
      }
    ?>
  </body>
</html>
