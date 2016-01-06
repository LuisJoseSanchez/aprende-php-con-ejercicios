<?php

require_once 'PizzeriaDB.php';

class Oferta {
  private $id;
  private $titulo;
  private $imagen;
  private $descripcion;
  
  function __construct($id, $titulo, $imagen, $descripcion) {
    $this->id = $id;
    $this->titulo = $titulo;
    $this->imagen = $imagen;
    $this->descripcion = $descripcion;
  }

  public function getId() {
    return $this->id;
  }

  public function getTitulo() {
    return $this->titulo;
  }

  public function getImagen() {
    return $this->imagen;
  }

  public function getDescripcion() {
    return $this->descripcion;
  }  
  
  public function insert() {
    $conexion = PizzeriaDB::connectDB();
    $insercion = "INSERT INTO oferta (titulo, imagen, descripcion) VALUES (\"".$this->titulo."\", \"".$this->imagen."\", \"".$this->descripcion."\")";
    $conexion->exec($insercion);
  }

  public function delete() {
    $conexion = PizzeriaDB::connectDB();
    $borrado = "DELETE FROM oferta WHERE id=\"".$this->id."\"";
    $conexion->exec($borrado);
  }
  
  public static function getOfertas() {
    $conexion = PizzeriaDB::connectDB();
    $seleccion = "SELECT id, titulo, imagen, descripcion FROM oferta";
    $consulta = $conexion->query($seleccion);
    
    $ofertas = [];
    
    while ($registro = $consulta->fetchObject()) {
      $ofertas[] = new Oferta($registro->id, $registro->titulo, $registro->imagen, $registro->descripcion);
    }
   
    return $ofertas;    
  }
  
  public static function getOfertaById($id) {
    $conexion = PizzeriaDB::connectDB();
    $seleccion = "SELECT id, titulo, imagen, descripcion FROM oferta WHERE id=\"".$id."\"";
    $consulta = $conexion->query($seleccion);
    $registro = $consulta->fetchObject();
    $oferta = new Oferta($registro->id, $registro->titulo, $registro->imagen, $registro->descripcion);
       
    return $oferta;    
  }
}
