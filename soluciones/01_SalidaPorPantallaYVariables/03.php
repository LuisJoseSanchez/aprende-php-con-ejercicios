<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
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
          <br>1. Salida por pantalla y variables
        </h2>
      </div>

      <div id="content">
        <?php
          echo "<table>";
        ?>
        <tr><th>Spanish</th><th>English</th></tr>
        <tr><td>conocimiento</td><td>knowledge</td></tr>
        <tr><td>amor</td><td>love</td></tr>
        <tr><td>felicidad</td><td>happiness</td></tr>
        <tr><td>agua</td><td>water</td></tr>
        <tr><td>aire</td><td>air</td></tr>
        <tr><td>pastel</td><td>cake</td></tr>
        <tr><td>dinero</td><td>money</td></tr>
        <tr><td>libro</td><td>book</td></tr>
        <tr><td>bosque</td><td>forest</td></tr>  
        <?php
          echo "</table>";
        ?>
                
        <br><br><hr><br>Código fuente:<br>
        <?php
        highlight_string('
          <?php
            echo "<table>";
          ?>
          <tr><th>Spanish</th><th>English</th></tr>
          <tr><td>conocimiento</td><td>knowledge</td></tr>
          <tr><td>amor</td><td>love</td></tr>
          <tr><td>felicidad</td><td>happiness</td></tr>
          <tr><td>agua</td><td>water</td></tr>
          <tr><td>aire</td><td>air</td></tr>
          <tr><td>pastel</td><td>cake</td></tr>
          <tr><td>dinero</td><td>money</td></tr>
          <tr><td>libro</td><td>book</td></tr>
          <tr><td>bosque</td><td>forest</td></tr>  
          <?php
            echo "</table>";
          ?>
        ');
        ?>
      </div>
      <div id="footer">
        © Luis José Sánchez González
      </div>
    </div>
  </body>
</html>
