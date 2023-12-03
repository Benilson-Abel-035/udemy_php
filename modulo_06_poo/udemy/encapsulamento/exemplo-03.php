<?php 
	class Pessoa {

		public $nomeUser = "Benilson Abel";
		protected $idade = 21;
		private $senha = "FR4NCK13";

		public function verDados() {

			// echo get_class($this) . "<br/>";

			echo $this->nomeUser . "<br/>";
			echo $this->idade . "<br/>";
			echo $this->senha . "<br/>";
		}
	}

	class Programador extends Pessoa { // linha de comando para estender a Class.

		public function verDados() { // estendendo o methodo da class mãe.

			// echo get_class($this) . "<br/>"; //funcao que declara qual é o metodo que esta sendo utilizado ou estanciado;

			// quem pode ter o acesso atributos e methos? 

			echo "<b>Nome: </b>". $this->nomeUser . "<br/>"; // publico todo mundo vê;
			echo "<b>Idade: </b>". $this->idade . "<br/>"; // Protegido só as class estendidas pode ver.;
			echo "<b>Senha: Não pode herda da class Mãe.</b>".@$this->senha . "<br/>"; // Privado nenhum class estendida ou quem herda pode ver os methods ou atributos privados; 
			echo "<hr>";
		}
	}
		class Cursos extends Programador{
			public $nomeCurso = "HTML, CSS e JAVASCRIPT";
			protected $ano =  4;
			private $project = "INNOSOTF";

				public function cursos() {
					echo "<h3>" . get_class($this) . "</h3>";
					echo "<b>Nome curso: </b>" . $this->nomeCurso . "<br>";
					echo "<b>Ano Experiência: </b>" . $this->ano =  4 . "<br>";
					echo "<b>Projecto: </b>" . $this->project . "<br>";
				}
		}

	class Design extends Cursos {
			public function cursos() {
			// echo "<h3>" . get_class($this) . "</h3>";
			echo $this->nomeCurso;
			echo $this->ano;
			echo $this->project;
		}		
	}


echo "<pre>";
	$object = new Design();

	print_r($object->verDados());

echo "</pre>";
?>