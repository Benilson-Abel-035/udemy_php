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
		
		public function validarCPF():bool {
			
			// Declara a var para receber o valor do CPF; 
				$numeroCPF = $this->getNumero();

			// validar CPF
			return true;
		}
	}
	
$CPF = new CPF();
echo "<pre>";

$CPF->setNumero("1111112111213-348");

print_r($CPF);
echo"<br>";

echo "<b>Tipo de Dapos: </b>";
var_dump($CPF->validarCPF())."<br>";
echo "<b>Numero do CPF: </b>".$CPF->getNumero()."<br>";

echo "</pre>";

?>