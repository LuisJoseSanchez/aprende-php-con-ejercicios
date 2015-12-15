<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Vehículos</title>
    </head>
    <body>
		<?php
			/*
			 * EJERCICIOS DE POO CON PHP
			 * RELACIÓN I
			 * Ejercicio 4
			 *
			 * @author Luis José Sánchez
			 * 
			 */
			 
			 include_once 'Bicicleta.php';
			 include_once 'Coche.php';
			 
			 // crea una bicicleta con 21 marchas
			 $miBici = new Bicicleta("21");
			 
			 // crea un coche con 1900cc de cilindrada
			 $miCoche = new Coche(1900);
			 
			 $miBici->recorre(40);
			 $miCoche->recorre(200);
			 echo $miBici->hazCaballito()."<br>";
			 echo $miCoche->quemaRueda()."<br>";
			 $miBici->recorre(60);
			 echo "Mi bici ha recorrido ".$miBici->getKmRecorridos()." Km<br>";
			 echo "Mi coche ha recorrido ".$miCoche->getKmRecorridos()." Km<br>";
			 echo "Se han creado un total de ".Vehiculo::getVehiculosCreados()." vehículos<br>";
			 echo "Todos los vehículos han hecho un total de ".Vehiculo::getKmTotales()." Km<br>";
		?>
    </body>
</html>
