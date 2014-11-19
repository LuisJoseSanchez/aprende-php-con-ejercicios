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
          $base = $_POST['base'];
          $exponente = $_POST['exponente'];

          if (!isset($base)) {
          ?>  
            Este programa calcula la potencia a partir de la base y el exponente.<br>
            <form action="14.php" method="post">
              Base: <input type="number" name="base" autofocus><br>
              Exponente: <input type="number" name="exponente"><br>
              <input type="submit" value="Aceptar">
            </form>
          <?php
          } else {
            $potencia = 1;

            if ($exponente == 0) {
              $potencia = 1;
            }

            if ($exponente > 0) {
              for ($i = 0; $i < $exponente; $i++) {
                $potencia *= $base;
              }
            }

            if ($exponente < 0) {
              for ($i = 0; $i < -$exponente; $i++) {
                $potencia *= $base;
              }

              $potencia = 1 / $potencia;
            }

            echo "$base<sup>$exponente</sup> = $potencia";
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
