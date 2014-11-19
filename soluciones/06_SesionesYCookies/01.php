<?php session_start(); ?>
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
                        <br>6. Sesiones y Cookies
		    </h2>
	    </div>

	    <div id="content">
               Este programa calcula la media de los números positivos introducidos.<br>
               Vaya introduciendo números (puede parar introduciendo un número negativo).<br>
                <?php
					$n = $_POST['n'];

					if (isset($n)) {
						if ($n < 0) {
								echo "<br><br>La media de los números introducidos es ";
								echo $_SESSION['total']/$_SESSION['cuentanumeros']."<br>";
						} else {
								$_SESSION['total'] += $n;
								$_SESSION['cuentanumeros']++;
								echo "<form action=\"01.php\" method=\"post\">";
								echo "<input type=\"text\" name=\"n\" autofocus>";
								echo "<input type=\"submit\" value=\"Aceptar\">";
								echo "</form>";
								}
					} else {
						$_SESSION['total'] = 0;
						$_SESSION['cuentanumeros'] = 0;
						echo "<form action=\"01.php\" method=\"post\">";
						echo "<input type=\"text\" name=\"n\" autofocus>";
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
