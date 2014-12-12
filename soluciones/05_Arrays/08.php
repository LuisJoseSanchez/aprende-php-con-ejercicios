
                <?php
                    if (!isset($_GET['n'])) {
                         $contadorNumeros = 1;
                         $numeroTexto = "";
                         echo '<form action="08.php" method="get">';
                         echo 'Introduzca un número:';
                         echo '<input type="text" name ="n" autofocus>';
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

                         if ($contadorNumeros < 10) {
                             $contadorNumeros++;
                             echo '<form action="08.php" method="get">';
                             echo 'Introduzca un número:';
                             echo '<input type="text" name="n" autofocus>';
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


                            // Guarda los primos y los no primos en arrays diferentes
                            $cuentaPrimos = 0;
                            $cuentaNoPrimos = 0;
                            
                            for ($i = 0; $i < 10; $i++) {
                                $esPrimo = true;
                                
                                for ($j = 2; $j < $numero[$i]; $j++)
                                    if (($numero[$i] % $j) == 0)
                                        $esPrimo = false;
                                    
                                if ($esPrimo) {
                                    $primos[$cuentaPrimos] = $numero[$i];
                                    $cuentaPrimos++;
                                } else {
                                    $noPrimos[$cuentaNoPrimos] = $numero[$i];
                                    $cuentaNoPrimos++;
                                }
                            }
                           
                            // Guarda los datos en el array original
                            // según lo que pide el ejercicio

                            for ($i = 0; $i < $cuentaPrimos; $i++)
                               $numero[$i] = $primos[$i];

                            for ($i = $cuentaPrimos; $i < $cuentaPrimos + $cuentaNoPrimos; $i++)
                               $numero[$i] = $noPrimos[$i - $cuentaPrimos];



                            // Muestra el array resultante

                            // Índice
                            echo "<br>Array resultante con los primos al principio y los no primos al final:<br>";
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