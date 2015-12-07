<?php
  if (!isset($_SESSION['logueado'])) {
    $_SESSION['logueado'] = false;
  } 
  
  // Formulario de login
  if (!$_SESSION['logueado']) {
  ?>
    <p>Debe iniciar sesión para acceder a la aplicación.</p>
    <form action="pagina.php" method="post">
      <input type="hidden" name="ejercicio" value="04">
      Usuario: <input type="text" name="usuario" autofocus><br>
      Contraseña: <input type="password" name="contrasena"><br><br>
      <input type="submit" value="Iniciar sesión">
    </form>
    <br>
  <?php
  }

  // Comprueba nombre de usuario y contraseña
  if (isset($_POST['usuario'])) {
    if (($_POST['usuario'] == "tux") && ($_POST['contrasena'] == "xut")) {
      $_SESSION['logueado'] = true;
      header("Refresh: 0; url=pagina.php?ejercicio=04", true, 303); // recarga la página
    } else {
      echo '<span style="color: red">Contraseña incorrecta. Inténtelo de nuevo.</span><br><br>';
      header("Refresh: 3; url=pagina.php?ejercicio=04", true, 303); // recarga la página
    }
  }
  
  if ($_SESSION['logueado']) {
    // Ejercicio 1 de la relación de Arrays /////////
    for ($i = 0; $i < 20; $i++) {
      $numero[] = rand(0,100);
    }

    foreach ($numero as $elemento) {
      $cuadrado[] = $elemento * $elemento;
      $cubo[] = $elemento * $elemento * $elemento;
    }

    echo "<table>";
    echo "<tr><td>Número</td><td>Cuadrado</td><td>Cubo</td></tr>";
    for ($i = 0; $i < 20; $i++) {
      echo "<tr><td>".$numero[$i]."</td>";
      echo "<td>".$cuadrado[$i]."</td>";
      echo "<td>".$cubo[$i]."</td></tr>";
    }
    echo "</table>";
    //////////////////////////////////////////////////
  } 
?>
