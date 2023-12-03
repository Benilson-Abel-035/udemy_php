<?php 

	interface Veiculo {

		public function ligarVeiculo();
		public function acilerarVeiculo($velucidade);
		public function frenarVeiculo($velucidade);
		public function trocarMarcha($marcha);
	
	}

	class Carro implements Veiculo {

		private $ligar;

		public function __construct() {
			$this->ligar = true;
		}

		public function ligarVeiculo(){
			echo "Carro ligado";
		}
		public function acilerarVeiculo($velucidade){
			echo "Carro acilerou até " . $velucidade . "km/h";
		}
		public function frenarVeiculo($velucidade){
			echo "Carro frenou até " . $velucidade . "km/h";
		}
		public function trocarMarcha($marcha){
			echo "Carro troco para marcha " . $marcha;
		}
	}

$carro = new Carro();
echo "<pre>";
print_r($carro);
echo "<br>";
$carro->acilerarVeiculo(100);
echo "<br>";
$carro->frenarVeiculo(50);
echo "<br>";
$carro->trocarMarcha(3);
echo "</pre>";

?>