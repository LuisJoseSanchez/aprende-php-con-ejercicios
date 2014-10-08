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

                $horasTrabajadas  = $_POST['horasTrabajadas'];

                    if ($horasTrabajadas  < 40)
                                    $sueldoSemanal = 12 * $horasTrabajadas ;
                            else
                                    $sueldoSemanal = (40 * 12) + (($horasTrabajadas  - 40) * 16);		

                echo "El sueldo semanal que le corresponde es de $sueldoSemanal euros";
		?>
	    </div>
	    <div id="footer">
		    © Luis José Sánchez González
	    </div>
	</div>
    </body>
</html>
