<?php
  require_once 'Oferta.php';

  // sube la imagen al servidor
  move_uploaded_file($_FILES["imagen"]["tmp_name"], "imagenes/" . $_FILES["imagen"]["name"]);

  // inserta la oferta en la base de datos
  $aux = new Oferta("", $_POST['titulo'], $_FILES["imagen"]["name"], $_POST['descripcion']);
  $aux->inserta();
  header("Location: index.php");