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
          $puntos = 0;
          
          foreach($_POST as $respuesta) {
            $puntos += $respuesta;
          }

          // Muestra el resultado del test

          if ( $puntos <= 10 ) {
            echo "¡Enhorabuena! tu pareja parece ser totalmente fiel.";
          }

          if ( ($puntos > 11 ) && ($puntos <= 22) ) {
            echo "Quizás exista el peligro de otra persona en su vida o en su mente,";
            echo "aunque seguramente será algo sin importancia. No bajes la guardia.";
          }

          if ( $puntos >= 22 ) {
            echo "Tu pareja tiene todos los ingredientes para estar viviendo un ";
            echo "romance con otra persona. Te aconsejamos que indagues un poco más ";
            echo "y averigües qué es lo que está pasando por su cabeza.";
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
