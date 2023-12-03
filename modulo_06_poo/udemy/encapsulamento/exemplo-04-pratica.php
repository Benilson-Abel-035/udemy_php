<?php
	class Legado {
	
		public $nome = "OS LONRENS";
		protected $empresa = "INNOSOTF";
		protected $personalidade = "Honra";
		private $experiencia = "Vital";
	
		public function verInformacao() {
			echo "<h3>Class Estanciada: ".get_class($this)."</h3>";
			echo "<b>Nome: </b>".$this->nome."<br>";
			echo "<b>Empresa: </b>".$this->empresa."<br>";
			echo "<b>Personalidade: </b>".$this->personalidade."<br>";
			echo "<b>Experiência: </b>".$this->experiencia."<br>" ;
		}

		// set
			public function setNome($n) {
			$this->nome = $n;
		}

			public function setEmpresa($e) {
			$this->empresa = $e;
		}

			public function setPersonalidade($p) {
			$this->personalidade = $p;
		}

			public function setExperiencia($ex) {
			$this->experiencia = $ex;
		}
		// get

			public function getNome() {
			return $this->nome;	
		}
	

			public function getEmpresa() {
			return $this->empresa;	
		}


			public function getPersonalidade() {
			return $this->personalidade;	
		}


			public function getExperiencia() {
			return $this->experiencia;	
		}
	}

	class legadoPai extends Legado {
			public function verInformacao() {
					
			$info = "Experiência não pode ser herdada!";
			echo "<h3>Class Estanciada: ".get_class($this)."</h3>";
			echo "<b>Nome: </b>".$this->nome."<br>";
			echo "<b>Empresa: </b>".$this->empresa."<br>";
			echo "<b>Personalidade: </b>".$this->personalidade."<br>";
			echo "<b>Experiência: </b>".@$this->experiencia.$info."<br>";
		
		}

		// set
			public function setNome($n) {
			$this->nome = $n;
		}

			public function setEmpresa($e) {
			$this->empresa = $e;
		}

			public function setPersonalidade($p) {
			$this->personalidade = $p;
		}

			public function setExperiencia($ex) {
			$this->experiencia = $ex;
		}
		// get

			public function getNome() {
			return $this->nome;	
		}
	

			public function getEmpresa() {
			return $this->empresa;	
		}


			public function getPersonalidade() {
			return $this->personalidade;	
		}


			public function getExperiencia() {
			return $this->experiencia;	
		}
	}

$legado = new Legado();
echo "<pre>";

// echo $legado->getPersonalidade();
// echo $legado->getPersonalidade();
// echo $legado->setExperiencia("Motivação | ");
// echo $legado->experiencia();

print_r($legado->verInformacao());

echo "</pre>";

?>