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
                Este programa calcula la media de los números positivos introducidos.<br>
                Vaya introduciendo números (puede parar introduciendo un número negativo).<br>
                <?php
		    $n = $_POST['n'];
		    $total = $_POST['total'];
		    $cuentaNumeros = $_POST['cuentaNumeros'];
		    
                    if (isset($n)) {
                        if ($n < 0) {
                            echo "<br><br>La media de los números introducidos es ";
			    $media = $total/$cuentaNumeros;
			    echo $media."<br>";
                        } else {
                            $total += $n;
                            $cuentaNumeros++;
                            echo "<form action=\"10.php\" method=\"post\">";
                            echo "<input type=\"text\" name=\"n\">";
                            echo "<input type=\"hidden\" name=\"total\" value=\"$total\">";
                            echo "<input type=\"hidden\" name=\"cuentaNumeros\" value=\"$cuentaNumeros\">";
                            echo "<input type=\"submit\" value=\"Aceptar\">";
                            echo "</form>";
                        }

                    } else {
			$total = 0;
			$cuentaNumeros = 0;
                            echo "<form action=\"10.php\" method=\"post\">";
                            echo "<input type=\"text\" name=\"n\">";
                            echo "<input type=\"hidden\" name=\"total\" value=\"$total\">";
                            echo "<input type=\"hidden\" name=\"cuentaNumeros\" value=\"$cuentaNumeros\">";
                            echo "<input type=\"submit\" value=\"Aceptar\">";
                            echo "</form>";
		    }
		?>

	    </div>
	    <div id="footer">
		    © Luis José Sánchez González
	    </div>
	</div>
    </body>
</html>
