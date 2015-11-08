<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h1>Base de datos <u>banco</u></h1>
    <h2>Alta de cliente</h2>
    <form action="altaClienteAccion.php" method="post">
      DNI <input type="text" name="dni" required><br>
      Nombre <input type="text" name="nombre"><br>
      Dirección <input type="text" name="direccion"><br>
      Teléfono <input type="tel" name="telefono"><br>
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>
