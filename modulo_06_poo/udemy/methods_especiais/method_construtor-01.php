<?php

	echo "<hr><h3>Fixando method construtor</h3><hr>";

	class Endereco {
		private $email;
		private $numero;
		private $cidade;

		public function __construct($e,$n, $c) {
			$this->email = $e;
			$this->numero = $n;
			$this->cidade = $c;
		}  

		public function __destruct() {
			// print("Destruir");
		}

		public function __toString() {
			return $this->email . " - " . $this->numero . " - " . $this->cidade;
		}
	}

$Endereco = new Endereco("Benilsonabel@gmail", "937513045", "Camama");

echo ("<b>Meu Endereço: </b>".$Endereco);

	// destruindo as var;
unset($Endereco);
?>