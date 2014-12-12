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
          $numeroGrande = $_POST['numeroGrande'];
          $numeroPequeno = $_POST['numeroPequeno'];
        
          if (!isset($numeroGrande)){
          ?>
            <form action="29.php" method="post">
              Introduzca un número entero positivo (relativamente grande):
              <input type="number" name="numeroGrande" min="0" autofocus="" required=""><br>
              Introduzca otro número (relativamente pequeño):
              <input type="number" name="numeroPequeno" min="0" required=""><br>
              <input type="submit" value="Aceptar">
            </form>
        <?php
          } else {
            $cuenta = 0;
            $suma = 0;

            echo "Los números enteros positivos menores que $numeroGrande";
            echo " que no son divisibles entre $numeroPequeno son los siguientes: <br>";

            for ($i = 1; $i < $numeroGrande; $i++) {
              if (($i % $numeroPequeno) != 0) {
                echo "$i ";
              }
            }
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
