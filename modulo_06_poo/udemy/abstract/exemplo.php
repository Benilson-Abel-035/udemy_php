<?php 
	
	// criando interface
	interface Veiculo {

		public function ligarVeiculo();
		public function acilerarVeiculo($velucidade);
		public function frenarVeiculo($velucidade);
		public function trocarMarcha($marcha);
	
	}
	//criando class abstract 
	abstract class Automovel implements Veiculo {

		protected $ligar;
		protected $nome;
		protected $ano;
		protected $motor;

	// criando methos __contruct
		public function __construct($n, $a, $m) {
			
			$this->ligar = true;
			$this->nome = $n;
			$this->ano = $a;
			$this->motor = $m;

		}

	// criando methos 

		public function ligarVeiculo(){
			echo "Carro ligado";
		}
		public function acilerarVeiculo($velucidade){
			// echo "Carro acilerou até " . $velucidade . "km/h";
		}
		public function frenarVeiculo($frenarv){
			// echo "Carro frenou até " . $velucidade . "km/h";
		}
		public function trocarMarcha($marcha){
			// echo "Carro troco para marcha " . $marcha;
		}
	}

// extendendo a class
class NovoCarro extends Automovel {

	public function informacao($nome, $ano, $motor) {
		$this->nome = $nome;
		$this->ano = $ano;
		$this->motor = $motor;
	}

// methos __contruct para exibir o objecto da class como string
	public function __toString() {
		// o valor da __toString so pode ser o returno
		return "Automovel " . "<b>" .$this->nome . "</b>" . " teve o seu grande lançamento em " . "<b>" . $this->ano . "</b>" . " com motor ". "<b>" . $this ->motor . "</b>" . "."; 
}

}

// instanciando a class e definindo os args pelo construct;
$carro = new NovoCarro("Mercedes", 1963, 8000);

echo "<pre>";

// echo($carro->informacao("Toyota", 1979, 1.699));
echo ($carro);

echo "</pre>";

?>