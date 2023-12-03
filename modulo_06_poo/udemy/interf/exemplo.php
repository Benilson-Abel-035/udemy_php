<?php

	interface Veiculo {

		// public function acelerar($v);
		// public function franar($v);
		public function trocarPista($t);

	}

	class Estrada implements Veiculo {


		public function trocarPista($t) {
			echo "O Veiculo  trocou	de	Pista:" . $t; 
		}


	}


$carro = new Estrada();
var_dump($carro);
$carro->trocarPista(1);

?>