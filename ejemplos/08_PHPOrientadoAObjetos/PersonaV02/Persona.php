<?php
	class Persona {
		private $nombre;
		private $profesion;
		
		// Constructor
		public function __construct($nom, $pro) {
			$this->nombre = $nom;
			$this->profesion = $pro;
		}

		public function presentarse() {
			// El método devuelve una cadena de caracteres. Es poco
			// elegante que los métodos hagan echo.
			return "Hola, me llamo ".$this->nombre." y soy ".$this->profesion.".<br>";
		}
	}
?>
