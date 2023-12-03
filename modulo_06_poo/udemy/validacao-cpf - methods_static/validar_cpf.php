<?php

	class CPFvalida {
		private $cpf;

		public function getCPF(){
			return $this->cpf;
		}
		public function setCPF($valor){
			if (is_numeric($valor) && $valor > 0) {
				$this->cpf = $valor;
			}else {
				echo "CPF inválido. O CPF deve ser um número positivo";
			}
		}
		public function validar() {
			if (isset($this->cpf)) {
				return true;
			}else {
				return false;
			}
		}
	}

$CPFvalidado = new CPFvalida();
$CPFvalidado->setCPF(2.5);
	if ($CPFvalidado->validar()) {
		echo "CPF válido " . $CPFvalidado->getCPF();
	}else {
		echo "CPF inválido";
	}
?>