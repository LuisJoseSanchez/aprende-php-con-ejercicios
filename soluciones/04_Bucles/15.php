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
                        <br>4. Bucles
		    </h2>
	    </div>

	    <div id="content">
                <?php
		    $base = $_POST['base'];
		    $exponenteFinal = $_POST['exponenteFinal'];
		    
                    if (!isset($base)) {
			echo "Este programa calcula una serie de potencias sucesivas a partir de la base y el exponente.<br>";
			echo "<form action=\"15.php\" method=\"post\">";
                        echo "Base: <input type=\"text\" name=\"base\" size=\"5\"><br>";
			echo "Exponente: <input type=\"text\" name=\"exponenteFinal\" size=\"5\"><br>";
                        echo "<input type=\"submit\" value=\"Aceptar\">";
                        echo "</form>";
                    } else {
		        for ($i = 1; $i <= $exponenteFinal; $i++) {
			    $potencia = 1;
			    $exponente = $i;
        
			    for ($j = 0; $j < $exponente; $j++)
				    $potencia *= $base;

			    echo "$base<sup>$exponente</sup> = $potencia<br>";
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
