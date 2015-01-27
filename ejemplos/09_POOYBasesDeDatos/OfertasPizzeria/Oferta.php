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
  
  public function inserta() {
    $conexion = PizzeriaDB::conectaDB();
    $insert = "INSERT INTO oferta (titulo, imagen, descripcion) VALUES (\"".$this->titulo."\", \"".$this->imagen."\", \"".$this->descripcion."\")";
    mysql_query($insert, $conexion);
    PizzeriaDB::desconectaDB();
  }

  public function borra() {
    $conexion = PizzeriaDB::conectaDB();
    $delete = "DELETE FROM oferta WHERE id=\"".$this->id."\"";
    mysql_query($delete, $conexion);
    PizzeriaDB::desconectaDB();
  }
  
  public static function getOfertas() {
    $conexion = PizzeriaDB::conectaDB();
    $select = "SELECT id, titulo, imagen, descripcion FROM oferta";
    $consulta = mysql_query($select, $conexion);
    
    $ofertas = array();
    
    while ($registro = mysql_fetch_array($consulta)) {
      $ofertas[] = new Oferta($registro[id], $registro[titulo], $registro[imagen], $registro[descripcion]);
    }
    
    PizzeriaDB::desconectaDB();
    
    return $ofertas;
  }

}
