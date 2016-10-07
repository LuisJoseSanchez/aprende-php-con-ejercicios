<?php

  /**
   * Devuelve un JSON con los datos de los empleados cuyos nombres contienen la cadena que
   * se pasa en la URL.
   * 
   * Ejemplo 1:
   * 
   *    listaEmpleados.php?nombre=me
   * 
   *    Devuelve un JSON con todos los datos de los empleados cuyos nombres contienen la
   *    cadena "me" (sin distiguir mayúsculas de minúsculas. Se mostrarían los datos de
   *    "Jimenez, Noelle J.", "Cooley, Cameron A.", "Meyer, Mikayla L.", etc.
   * 
   * Ejemplo 2:
   * 
   *    listaEmpleados.php
   * 
   *    Si no se pasa ninguna cadena en la URL, se devuelven los datos de todos los empleados.
   */

  // Abre el fichero con los datos en modo lectura
  $f = fopen("datos_empleados.csv", "r");
  
  while (($datosEmpleado = fgetcsv($f, 1000, ","))) { // extrae los datos de un empleado
    // En $datosEmpleado[0] está el nombre
    // En $datosEmpleado[1] está el email
    // En $datosEmpleado[2] está el teléfono
    // En $datosEmpleado[3] está la dirección
    // En $datosEmpleado[4] está la ciudad
    // En $datosEmpleado[5] está el pais
    // En $datosEmpleado[6] está el sueldo mensual en euros

    // Comprueba si el nombre del empleado contiene la cadena buscada
    // o si no se ha pasado ningún nombre en la URL.
    if ((mb_stripos($datosEmpleado[0], $_GET['nombre']) !== FALSE) || !isset($_GET['nombre'])) {
      // Añade los datos del empleado al array
      $empleados[] = [
        'nombre' => $datosEmpleado[0],
        'email' => $datosEmpleado[1],
        'telefono' => $datosEmpleado[2],
        'direccion' => $datosEmpleado[3],
        'ciudad' => $datosEmpleado[4],
        'pais' => $datosEmpleado[5],
        'sueldo' => $datosEmpleado[6]
      ];
    }
  } // while

  fclose($f);

  // Transforma el array con el resultado a formato JSON 
  echo json_encode($empleados);