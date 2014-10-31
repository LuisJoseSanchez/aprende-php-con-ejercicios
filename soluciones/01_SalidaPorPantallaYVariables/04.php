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
        <table>
        <tr>
          <th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th>
        </tr>
        <?php
          echo "<tr><td>DSERV</td><td>LCONW</td><td>LCONW</td>";
          echo "<td>DESPL</td><td>INTER</td></tr>";
        ?>
        <tr><td>DSERV</td><td>LCONW</td><td>EIEW</td><td>EIEW</td><td>INTER</td></tr>
        <tr><td>DSERV</td><td>DSERV</td><td>EIEW</td><td>EIEW</td><td>INTER</td></tr>
        <tr><td colspan="5"><center>R E C R E O</center></td></tr>
        <tr><td>DCLI</td><td>SERV</td><td>INTER</td><td>DCLI</td><td>DSERV</td></tr>
        <tr><td>DCLI</td><td>DESPL</td><td>INTER</td><td>DCLI</td><td>DSERV</td></tr>
        <tr><td>DCLI</td><td>DESPL</td><td>INTER</td><td>DCLI</td><td>DSERV</td></tr>
        </table>

        <br><br><hr><br>Código fuente:<br>
        <?php
        highlight_string('
          <table>
          <tr>
            <th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th>
          </tr>
          <?php
            echo "<tr><td>DSERV</td><td>LCONW</td><td>LCONW</td>";
            echo "<td>DESPL</td><td>INTER</td></tr>";
          ?>
          <tr><td>DSERV</td><td>LCONW</td><td>EIEW</td><td>EIEW</td><td>INTER</td></tr>
          <tr><td>DSERV</td><td>DSERV</td><td>EIEW</td><td>EIEW</td><td>INTER</td></tr>
          <tr><td colspan="5"><center>R E C R E O</center></td></tr>
          <tr><td>DCLI</td><td>SERV</td><td>INTER</td><td>DCLI</td><td>DSERV</td></tr>
          <tr><td>DCLI</td><td>DESPL</td><td>INTER</td><td>DCLI</td><td>DSERV</td></tr>
          <tr><td>DCLI</td><td>DESPL</td><td>INTER</td><td>DCLI</td><td>DSERV</td></tr>
          </table>
          ');
          ?>
      </div>
      <div id="footer">
        © Luis José Sánchez González
      </div>
    </div>
  </body>
</html>
