<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
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
                    $a = $_POST['a'];
                    $b = $_POST['b'];
                    
                    if ($a == 0)
                                    echo "Esa ecuación no tiene solución real.";
                            else
                                    echo "x = ", (-$b/$a);
    ?>
      </div>
      <div id="footer">
        © Luis José Sánchez González
      </div>
  </div>
    </body>
</html>
