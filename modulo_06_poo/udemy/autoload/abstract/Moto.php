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
    class Moto extends Automovel {
       
		public function __toString() {
			return "Seja bem vindo.";
		}
    }

?>