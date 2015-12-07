<?php
  require_once 'Oferta.php';
  $aux = new Oferta($_GET['id']);
  $aux->borra();
  header("Location: index.php");