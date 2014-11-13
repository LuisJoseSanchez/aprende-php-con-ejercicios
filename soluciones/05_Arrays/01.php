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
                    for ($i = 0; $i < 20; $i++)
                        $numero[] = rand(0,100);
                    
                    foreach ($numero as $elemento) {
                        $cuadrado[] = $elemento * $elemento;
                        $cubo[] = $elemento * $elemento * $elemento;
                    }
                    
                    echo "<table>";
                    echo "<tr><td>Número</td><td>Cuadrado</td><td>Cubo</td></tr>";
                    for ($i = 0; $i < 20; $i++) {
                        echo "<tr><td>".$numero[$i]."</td>";
                        echo "<td>".$cuadrado[$i]."</td>";
                        echo "<td>".$cubo[$i]."</td></tr>";
                    }
                    echo "</table>";
                ?>
	    </div>
	    <div id="footer">
		    © Luis José Sánchez González
	    </div>
	</div>
    </body>
</html>
