<?php
  require_once '../Model/Oferta.php';

  // Obtiene todas las ofertas
  $data['ofertas'] = Oferta::getOfertas();

  include '../View/listado.php';