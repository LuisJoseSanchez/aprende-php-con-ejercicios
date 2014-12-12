                <?php
                    if (!isset($_GET['n'])) {
                         $contadorNumeros = 1;
                         $numeroTexto = "";
                         echo '<form action="03.php" method="get">';
                         echo 'Introduzca un número:';
                         echo '<input type="text" name ="n">';
                         echo '<input type="hidden" name="contadorNumeros" value="'.$contadorNumeros.'">';
                         echo '<input type="submit" value="OK">';
                         echo '</form>';
                     } else {
                         $contadorNumeros = $_GET['contadorNumeros'];
                         $n = $_GET['n'];
                         $numeroTexto = $_GET['numeroTexto'];

                         if ($numeroTexto=="")
                             $numeroTexto = $n;
                         else
                             $numeroTexto = $numeroTexto.' '.$n;

                         if ($contadorNumeros < 15) {
                             $contadorNumeros++;
                             echo '<form action="03.php" method="get">';
                             echo 'Introduzca un número:';
                             echo '<input type="text" name="n">';
                             echo '<input type="hidden" name="contadorNumeros" value="'.$contadorNumeros.'">';
                             echo '<input type="hidden" name="numeroTexto" value="'.$numeroTexto.'">';
                             echo '<input type="submit" value="OK">';
                             echo '</form>';
                         } else {
                             ////////////////////////////////////////////////////////////////
                             //  Programa principal una vez recogidos los datos del array
                             //  El array con los números es $numero
                             ////////////////////////////////////////////////////////////////
                             
                             $numero = explode(" ", $numeroTexto);
                             
                             
                             // Muestra el array original
                             
                             echo "Array original:<br>";
                             
                             echo "<table><tr>";
                             
                             for ($i = 0; $i < 15; $i++)
                                echo "<td>$i</td>";
                             
                             echo "</tr>";
                             
                             for ($i = 0; $i < 15; $i++)
                                echo "<td>".$numero[$i]."</td>";
                             
                             echo "</tr></table>";

                             
                             // Rota los elementos del array hacia la derecha
                             
                             $aux = $numero[14];
                             
                             for ($i = 14; $i > 0; $i--)
                                $numero[$i] = $numero[$i - 1];
                             
                             $numero[0] = $aux;
                                
                             
                             // Muestra el array rotado
                             
                             echo "<br>Array rotado:<br>";
                             
                             echo "<table><tr>";
                             
                             for ($i = 0; $i < 15; $i++)
                                echo "<td>$i</td>";
                             
                             echo "</tr>";
                             
                             for ($i = 0; $i < 15; $i++)
                                echo "<td>".$numero[$i]."</td>";
                             
                             echo "</tr></table>";
                         }
                     }
                ?>
