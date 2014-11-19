<?php
	session_start();
?>
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
			<h3>Nueva palabra</h3><hr>
			<form action="admin_palabras.php" method="post">
				Español: <input type="text" name="espanol"><br>
				Inglés: <input type="text" name="ingles"><br>
				<input type="submit" name="accion"value="Alta">
			</form><br><br>

	    </div>
	    <div id="footer">
		    © Luis José Sánchez González
	    </div>
	</div>
    </body>
</html>