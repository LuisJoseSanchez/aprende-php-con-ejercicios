<?php
  require_once 'twig/lib/Twig/Autoloader.php';
  Twig_Autoloader::register();
  $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
  $twig = new Twig_Environment($loader);

  $x = $_GET['x'];
  $y = $_GET['y'];
  echo $twig->render('formulario.html.twig', ['x' => $x, 'y' => $y, 'suma' => $x + $y]);