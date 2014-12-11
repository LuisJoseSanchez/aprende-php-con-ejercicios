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
          $alturaIntroducida = $_POST['alturaIntroducida'];
        
          if (!isset($alturaIntroducida)){
          ?>
            <h2>Pirámide de números</h2>
            <form action="24.php" method="post">
              Altura: <input type="number" name="alturaIntroducida" min="1" max="9" autofocus="" required=""><br>
              <input type="submit" value="Aceptar">
            </form>
          <?php
          } else {
            $altura = 1;
            $i = 0;
            $espacios = $alturaIntroducida-1;

            echo "<p style=\"font-family: courier\">";
            while ($altura <= $alturaIntroducida) {

              // inserta espacios
              for ($i = 1; $i <= $espacios; $i++) {
                echo "&nbsp";
              }
              
              // pinta la línea de números
              for ($i = 1; $i < $altura; $i++) {
                echo $i;
              }
              
              for ($i = $altura; $i > 0; $i--) {
                echo $i;
              }

              echo "<br>";

              $altura++;
              $espacios--;
            } // while
            echo "</p>";
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
