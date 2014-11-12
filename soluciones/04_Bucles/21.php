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
		    $n = $_POST['n'];
		    $cuentaNumeros = $_POST['cuentaNumeros'];
		    $sumaImpares = $_POST['sumaImpares']; 
		    $cuentaImpares = $_POST['cuentaImpares'];
		    $mayorPar = $_POST['mayorPar'];
		    
		    if (!isset($n)) {
			$cuentaNumeros = 0;
			$sumaImpares = 0; 
			$cuentaImpares = 0;
			$mayorPar = -PHP_INT_MAX;
		    }
		    
		    if ($n > 0) {
			$cuentaNumeros++;
			if ($n%2 == 0) {
			    if ($n > $mayorPar)
				$mayorPar = $n;
			} else {
			    $cuentaImpares++;
			    $sumaImpares += $n;
			}
		    }
		    
                    if ((!isset($n)) || ($n > 0)){
			echo "Introduzca un número. Si quiere terminar, introduzca un número negativo.<br>";
			echo "<form action=\"21.php\" method=\"post\">";
                        echo "<input type=\"text\" name=\"n\" size=\"8\"><br>";
			echo "<input type=\"hidden\" name=\"cuentaNumeros\" value=\"$cuentaNumeros\">";
			echo "<input type=\"hidden\" name=\"sumaImpares\" value=\"$sumaImpares\">";
			echo "<input type=\"hidden\" name=\"cuentaImpares\" value=\"$cuentaImpares\">";
			echo "<input type=\"hidden\" name=\"mayorPar\" value=\"$mayorPar\">";
                        echo "<input type=\"submit\" value=\"Aceptar\">";
                        echo "</form>";
                    }
		    
		    if ($n < 0) {
			echo "Se han introducido $cuentaNumeros números <br>";
			echo "La media de los impares es ".($sumaImpares/$cuentaImpares)."<br>";
			echo "El mayor de los pares es $mayorPar<br>";
		    }
		?>

	    </div>
	    <div id="footer">
		    © Luis José Sánchez González
	    </div>
	</div>
    </body>
</html>
