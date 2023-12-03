<?php

	class ControloRemoto {
		private $volume;
		private $ligar;
		private $tocando;


	public function __construct($v) {
		$this->volume = $v;
	}
	// get
	private function getVolume() {
		return $this->volume;
	}
	// set 
	private function setVolume($v) {
		$this->volume = $v;
	}

}

?>