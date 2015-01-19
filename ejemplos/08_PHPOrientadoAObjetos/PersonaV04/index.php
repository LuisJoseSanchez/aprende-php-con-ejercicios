<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
		<?php
			include_once 'Persona.php';
			
			$unTipo = new Persona("Pepe Pérez", "albañil", 30);
			$unNota = new Persona("Rigoberto Peláez", "programador", 25);
			echo $unTipo;
			echo $unNota;
		?>
    </body>
</html>
