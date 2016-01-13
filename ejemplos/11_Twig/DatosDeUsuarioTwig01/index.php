<?php
  require_once 'twig/lib/Twig/Autoloader.php';
  Twig_Autoloader::register();
  $loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
  $twig = new Twig_Environment($loader);

  $datos = [
    'nombre' => 'Elena',
    'apellido1' => 'Nito',
    'apellido2' => 'Del Bosque',
    'dni' => '1234567X',
  ];

  echo $twig->render('infoUsuario.html.twig', $datos);
