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
                    $c = $_POST['c'];


                    // 0x^2 + 0x + 0 = 0

                    if (($a == 0) && ($b == 0) && ($c == 0))
                            echo  "La ecuación tiene infinitas soluciones.";


                    // 0x^2 + 0x + c = 0  con c distinto de 0

                    if (($a == 0) && ($b == 0) && ($c != 0))
                            echo  "La ecuación no tiene solución.";


                    // ax^2 + bx + 0 = 0  con a y b distintos de 0

                    if (($a != 0) && ($b != 0) && ($c == 0)) {
                            echo  "x1 = 0";
                            echo  "<br>x2 = ", (-$b / $a);
                            }


                    // 0x^2 + bx + c = 0  con b y c distintos de 0

                    if (($a == 0) && ($b != 0) && ($c != 0))
                            echo  "x1 = x2 = ", (-$c / $b);


                    // ax^2 + bx + c = 0  con a, b y c distintos de 0

                    if (($a != 0) && ($b != 0) && ($c != 0)) {	

                            $discriminante = $b*$b - (4 * $a * $c);

                            if ($discriminante < 0)
                                            echo  "La ecuación no tiene soluciones reales";
                                    else {
                                            echo  "x1 = ", (-$b + sqrt($discriminante))/(4 * $a * $c);
                                            echo  "<br>x2 = ", (-$b - sqrt($discriminante))/(4 * $a * $c);
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
