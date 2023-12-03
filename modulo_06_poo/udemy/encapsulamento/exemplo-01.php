<?php 
	class Pessoa {
		public $nome = "Benilson Abel";
		protected $idade = 21;
		private $senha = "FR4NCK13";

		public function verDados() {

			echo "<b>Nome:  </b>" . $this->nome  . "<br/>";
			echo "<b>Idade: </b>" . $this->idade . "<br/>";
			echo "<b>Senha: </b>" . $this->senha . "<br/>";
			
		}
	}

echo "<pre>";
	$object = new Pessoa();

	print_r($object->verDados());

echo "</pre>";
?>