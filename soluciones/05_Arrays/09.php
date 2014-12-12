
                <?php
                    // Primera entrada en la página
                    if (!isset($_GET['n'])) {
                         $contadorNumeros = 1;
                         $numeroTexto = "";
                         echo '<form action="09.php" method="get">';
                         echo 'Introduzca un número:';
                         echo '<input type="text" name ="n" autofocus>';
                         echo '<input type="hidden" name="contadorNumeros" value="'.$contadorNumeros.'">';
                         echo '<input type="submit" value="OK">';
                         echo '</form>';
                     // Se van pidiendo los números
                     } else if ($_GET['contadorNumeros'] < 10) {
                         $contadorNumeros = $_GET['contadorNumeros'];
                         $n = $_GET['n'];
                         $numeroTexto = $_GET['numeroTexto'];

                         if ($numeroTexto=="")
                             $numeroTexto = $n;
                         else
                             $numeroTexto = $numeroTexto.' '.$n;
                         
			$contadorNumeros++;
			echo '<form action="09.php" method="get">';
			echo 'Introduzca un número:';
			echo '<input type="text" name="n" autofocus>';
			echo '<input type="hidden" name="contadorNumeros" value="'.$contadorNumeros.'">';
			echo '<input type="hidden" name="numeroTexto" value="'.$numeroTexto.'">';
			echo '<input type="submit" value="OK">';
			echo '</form>';
			 
                     // Se piden los valores de inicial y final
                     } else if (!isset($_GET['inicial'])){
			$contadorNumeros = $_GET['contadorNumeros'];
                        $numeroTexto = $_GET['numeroTexto'];
			$n = $_GET['n'];
			$numeroTexto = $numeroTexto.' '.$n;
			
			echo '<form action="09.php" method="get">';
			echo 'Posición inicial:';
			echo '<input type="text" name="inicial" autofocus><br>';
			echo 'Posición final:';
			echo '<input type="text" name="final"><br>';
			echo '<input type="hidden" name="contadorNumeros" value="'.$contadorNumeros.'">';
			echo '<input type="hidden" name="numeroTexto" value="'.$numeroTexto.'">';
			echo '<input type="hidden" name="n" value="basura">';
			echo '<input type="submit" value="OK">';
			echo '</form>';
                     } else {
			////////////////////////////////////////////////////////////////
			//  Programa principal una vez recogidos los datos del array
			//  El array con los números es $numero
			////////////////////////////////////////////////////////////////
	
			$inicial = $_GET['inicial'];
			$final = $_GET['final'];
			$numeroTexto = $_GET['numeroTexto'];

			if (($inicial >= $final) || ($inicial < 0) || ($inicial > 9) || ($final < 0) || ($final > 9))
			       echo 'Los datos introducidos no son correctos';

			   else {

			      $numero = explode(" ", $numeroTexto);

			      // Muestra el array original

			      // Índice
			      echo "Array original:<br>";
			      echo "<table><tr>";
			      for ($i = 0; $i < 10; $i++)
				 echo "<td>$i</td>";
			      echo "</tr>";

			      // Contenido
			      for ($i = 0; $i < 10; $i++)
				 echo "<td>".$numero[$i]."</td>";
			      echo "</tr></table>";


			      // Rotación

			      // Primer tramo
			      $auxiliar = $numero[9];
			      for ($i = 9; $i > $final; $i--)
				   $numero[$i] = $numero[$i - 1];
			      $numero[$final] = $numero[$inicial];
			      
			      // Segundo tramo
			      for ($i = $inicial; $i > 0; $i--)
				   $numero[$i] = $numero[$i - 1];
			      $numero[0] = $auxiliar;


			      // Muestra el array resultante

			      // Índice
			      echo "<br><br>Inicial: $inicial Final: $final<br>";
			      echo "<br>Array resultante:<br>";
			      echo "<table><tr>";
			      for ($i = 0; $i < 10; $i++)
				 echo "<td>$i</td>";
			      echo "</tr>";

			      // Contenido
			      for ($i = 0; $i < 10; $i++)
				 echo "<td>".$numero[$i]."</td>";
			      echo "</tr></table>";
			    }
                     }
