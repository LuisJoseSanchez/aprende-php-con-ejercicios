<?php
  require_once 'twig/lib/Twig/Autoloader.php';
  Twig_Autoloader::register();
  $loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
  $twig = new Twig_Environment($loader);

  $infoUsuario = $twig->loadTemplate('infoUsuario.html.twig');

  $datos = [
    titulo => 'Información de usuario',
    usuario => [
      'nombre' => 'Elena',
      'apellido1' => 'Nito',
      'apellido2' => 'Del Bosque',
      'dni' => '1234567X',
    ]
  ];

  echo $twig->render('infoUsuario.html.twig', $datos);