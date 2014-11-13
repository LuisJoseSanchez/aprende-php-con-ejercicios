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
                    $puntuacion = array ('as' => 11, 'dos' => 0, 'tres' => 10, 'cuatro' => 0, 'cinco' => 0, 'seis' => 0, 'siete' => 0, 'sota' => 2, 'caballo' => 3, 'rey' => 4);
                    $palo = array ('oros', 'copas', 'bastos', 'espadas');
                    $figura = array ('as', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'sota', 'caballo', 'rey');
                    $cartasEchadas = "";
                    $contadorCartasEchadas = 0;
                    $puntosTotales = 0;
 
                    do {

                        $paloCarta = $palo[rand(0, 3)];
                        $figuraCarta = $figura[rand(0, 9)];
                        $puntosCarta = $puntuacion[$figuraCarta];
                        $nombreCarta = "$figuraCarta de $paloCarta";
                        if (!in_array($nombreCarta, $cartasEchadas)) {
                            echo "$nombreCarta - $puntosCarta puntos<br>";
                            $cartasEchadas[] = $nombreCarta;
                            $contadorCartasEchadas++;
                            $puntosTotales += $puntosCarta;
                        }       
                    } while ($contadorCartasEchadas < 10); 
                    
                    echo "<br><b>Total: $puntosTotales puntos</b>";
                ?>
	    </div>
	    <div id="footer">
		    © Luis José Sánchez González
	    </div>
	</div>
    </body>
</html>