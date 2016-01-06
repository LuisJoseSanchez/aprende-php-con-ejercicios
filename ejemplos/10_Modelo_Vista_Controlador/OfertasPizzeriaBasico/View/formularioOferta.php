<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <form action="../Controller/grabaOferta.php"  enctype="multipart/form-data" method="POST">
      <h3>Título</h3>
      <input type="text" size="40" name="titulo">
      <h3>Imagen</h3>
      <input type="file" id="imagen" name="imagen">
      <br><h3>Descripción</h3>
      <textarea name="descripcion" cols="60" rows="6">
      </textarea><hr>
      <input type="submit" value="Aceptar">
    </form>
  </body>
</html>
