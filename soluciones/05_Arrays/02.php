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
                        <br>5. Arrays
		    </h2>
	    </div>

	    <div id="content">
                <?php
                    if (!isset($_GET['n'])) {
                         $contadorNumeros = 1;
                         $numeroTexto = "";
                         echo '<form action="02.php" method="get">';
                         echo 'Introduzca un número:';
                         echo '<input type="text" name ="n">';
                         echo '<input type="hidden" name="contadorNumeros" value="'.$contadorNumeros.'">';
                         echo '<input type="submit" value="OK">';
                         echo '</form>';
                     } else {
                         $contadorNumeros = $_GET['contadorNumeros'];
                         $n = $_GET['n'];
                         $numeroTexto = $_GET['numeroTexto'];

                         if ($numeroTexto=="")
                             $numeroTexto = $n;
                         else
                             $numeroTexto = $numeroTexto.' '.$n;

                         if ($contadorNumeros < 10) {
                             $contadorNumeros++;
                             echo '<form action="02.php" method="get">';
                             echo 'Introduzca un número:';
                             echo '<input type="text" name="n">';
                             echo '<input type="hidden" name="contadorNumeros" value="'.$contadorNumeros.'">';
                             echo '<input type="hidden" name="numeroTexto" value="'.$numeroTexto.'">';
                             echo '<input type="submit" value="OK">';
                             echo '</form>';
                         } else {
                             ////////////////////////////////////////////////////////////////
                             //  Programa principal una vez recogidos los datos del array
                             //  El array con los números es $numero
                             ////////////////////////////////////////////////////////////////
                             
                             $numero = explode(" ", $numeroTexto);
                             
                             $maximo = -PHP_INT_MAX;
                             $minimo = PHP_INT_MAX;
                             
                             foreach ($numero as $n) {
                                 if ($n < $minimo)  $minimo = $n;
                                 if ($n > $maximo)  $maximo = $n;
                             }
                             
                             foreach ($numero as $n) {
                                 if ($n == $minimo)
                                        echo "$n mínimo<br>";
                                 else if ($n == $maximo)
                                        echo "$n máximo<br>";
                                 else
                                     echo "$n<br>";
                             }
                         }
                     }
                ?>
	    </div>
	    <div id="footer">
		    © Luis José Sánchez González
	    </div>
	</div>
    </body>
</html>
