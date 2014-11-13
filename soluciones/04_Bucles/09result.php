<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
                    $n = $_POST['n'];

                    $numeroIntroducido = $n;
                    $numeroDeDigitos = 1;
                    
                    while ($n > 10) {
                        $n = floor($n/10);
                        $numeroDeDigitos++;
                    }

                    echo "$numeroIntroducido tiene $numeroDeDigitos dígito/s.";
    ?>
      </div>
      <div id="footer">
        © Luis José Sánchez González
      </div>
  </div>
    </body>
</html>
