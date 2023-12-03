<?php  

	interface Lampada {

		public function ligarLampada();
		public function luzPadrao();
		public function trocarLuzes($trocarLuzes);
		public function luzAmarela($luzAmarela);
		public function luzVerde($luzVerde);
		public function luzPreta($luzPreta);
		public function desligarLampada($desligar);
	}

	class Luz implements Lampada {
// atributos
		private $ligar; 
		private $trocarLuzes; 
		private $desligar; 

// contructor; 

		public function __construct($a, $b, $c){
			$this->ligar = false;
			$this->trocarLuzes = $b;
			$this->desligar = $c;
		}

// get
		private function getLigar() {
			return $this->ligar;
		} 
		private function gettrocarLuzes() {
			return $this->trocarLuzes;
		}
		private function getDesligar() {
			return $this->desligar;
		}
// set
		private function setLigar($l) {
			$this->ligar = $l;
		}
		private function settrocarLuzes($lz) {
			$this->trocarLuzes = $lz;
		}
		private function setDesligar($d) {
			$this->desligar = $d;
		}

// methods da interface

		public function ligarLampada() {
			echo ($this->setLigar(true))? "Lampada ligada":"Lampada não está ligada";
		}
		public function luzPadrao(){
			$luzPadrao = "Branca";
			echo ", luzes $luzPadrao";
		}
		public function trocarLuzes($trocarLuzes){
			// echo "trocar luzes para $trocarLuzes"
		}
		public function luzAmarela($luzAmarela){

		}
		public function luzVerde($luzVerde){

		}
		public function luzPreta($luzPreta){

		}
		public function desligarLampada($desligar){

		}
	}

	$Lampada = new Luz(true, "preta", false);

	echo "<pre>";
	var_dump($Lampada);
	// print_r($Lampada);
	echo "<br>";
	$Lampada->ligarLampada();
	$Lampada->luzPadrao();
	echo "</pre>";

?>