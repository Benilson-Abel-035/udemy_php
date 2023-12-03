<?php

	class Documentos {

		private $numero;

		public function getNumero() {
			return $this->numero;
		}

		public function setNumero($n) {
			$this->numero = $n;
		}
	}

	class CPF extends Documentos {

		// validar cpf

		public function validar():bool {
				
			$numeroCPF = $this->getNumero();

			return true;
		} 
	}

	class BI extends Documentos {

		// validar BI

		public function validarBI() {
			// validar a quantidade de didgitos = 12; 
			if ($this->getNumero() >= 3) {
				echo $numeroBI = $this->getNumero();
			}else {
				echo "Número de BI inválido";
			}
			echo "<br>";

			return "<script>if(confirm('Você deseja ir para outra página?')){location.href='exemplo-01.php'}else{false}</script>";
		}
	}
	class PDF extends Documentos {

		// validar PDF

		public function validarPDF() {

			return true;
		}
	}


$doc = new CPF();

$doc->setNumero("122333335446");

var_dump(($doc->validar()));

echo "<br>";

echo $doc->getNumero();

echo "<hr>";

$docBI = new BI();
$docBI->setNumero("3");
var_dump(($docBI->validarBI()));
?>