<?php 
	class Pessoa {
		public $nome = "Benilson Abel";
		protected $idade = 21;
		private $senha = "FR4NCK13";

		public function verDados() {
			
			echo $this->nome . "<br/>";
			echo $this->idade . "<br/>";
			echo $this->senha . "<br/>";
		}
	}

echo "<pre>";

	$object = new Pessoa();

	print_r($object->verDados());

echo "</pre>";
?>