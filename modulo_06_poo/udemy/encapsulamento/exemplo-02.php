<?php 
	class Pessoa {

		public $nome = "Benilson Abel";
		protected $idade = 21;
		private $senha = "FR4NCK13";

		public function verDados() {
			
			echo get_class($this) . "<br/>";

			echo $this->nome . "<br/>";
			echo $this->idade . "<br/>";
			echo $this->senha . "<br/>";
		}
	}

	class Programador extends Pessoa { // linha de comando para estender a Class.

		public function verDados() { // estendendo o methodo da class mãe.

			echo get_class($this) . "<br/>"; //funcao que declara qual é o metodo que esta sendo utilizado ou estanciado;

			// quem pode ter o acesso atributos e methos? 

			echo "<b>Nome: </b>". $this->nome . "<br/>"; // publico todo mundo vê;
			echo "<b>Idade: </b>". $this->idade . "<br/>"; // Protegido só as class estendidas pode ver.;
			echo "<b>Senha: Não pode herda da class Mãe.</b>". @$this->senha . "<br/>"; // Privado nenhum class estendida ou quem herda pode ver os methods ou atributos privados; 
		}

	}

echo "<pre>";
	$object = new Pessoa();

	print_r($object->verDados());

echo "</pre>";
?>