<?php
  require_once '../Model/Oferta.php';

  // Obtiene todas las ofertas
  $data['ofertas'] = Oferta::getOfertas();

  // Carga la vista de listado
  include '../View/listado.php';