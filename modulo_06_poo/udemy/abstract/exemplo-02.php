<?php

	//criando class abstract 
	abstract class Automovel {

		protected $ligar;
		protected $nome;
		protected $ano;
		protected $motor;
        protected $velocidade;

	// criando methos __contruct
		public function __construct($n, $a, $m, $v) {
			
			$this->ligar = true;
			$this->nome = $n;
			$this->ano = $a;
			$this->motor = $m;
            $this->velocidade = $v;

		}

	// criando methos 

		public function ligarVeiculo(){
			if ($this->ligar === true) {
                $this->ligar = "está ligado";
            }else {
                $this->ligar = "está desligado";
            }
		}
		public function acilerarVeiculo($velocidade){
            if($velocidade >= 50 && $velocidade <= 90) {
                echo $velocidade = "Velocidade máxima por favor reduz a velocidade";
            }else {
                echo $velocidade = "Velocidade media pode continuar";
            }
		}
		public function frenarVeiculo($frenarv){

        }
		public function trocarMarcha($marcha){

        }
	}

// extendendo a class
class NovoCarro extends Automovel {

	public function informacao($nome, $ano, $motor, $v) {
		$this->nome = $nome;
		$this->ano = $ano;
		$this->motor = $motor;
        $this->velocidade = $v;
	}

// methos __contruct para exibir o objecto da class como string
	public function __toString() {
		// o valor da __toString so pode ser o returno
        return "O automovel " . "<b>" .$this->nome. "</b>" .  " " . "<b>" .$this->ligar. "</b>" . " e acilerou " . "<b>" .$this->velocidade. "km/h" 
                . " teve o seu lançamento em " .$this->ano. " com o motor " .$this->motor; 
        // return " O carro " . $this->ligar;

    }

}

// instanciando a class e definindo os args pelo construct;
$carro = new NovoCarro("Mercedes", 1963, 8000, 1000);
$carro->ligarVeiculo();
$carro->acilerarVeiculo(80);
echo "<pre>";

// echo($carro->informacao("Toyota", 1979, 1.699));
echo ($carro);
echo "<br><br>";
var_dump ($carro);
echo "<br>";
// var_dump($carro);

echo "</pre>";

?>