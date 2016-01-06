<?php
  require_once '../Model/Oferta.php';

  // sube la imagen al servidor
  move_uploaded_file($_FILES["imagen"]["tmp_name"], "../View/images/" . $_FILES["imagen"]["name"]);

  // inserta la oferta en la base de datos
  $ofertaAux = new Oferta("", $_POST['titulo'], $_FILES["imagen"]["name"], $_POST['descripcion']);
  $ofertaAux->insert();
  header("Location: index.php");