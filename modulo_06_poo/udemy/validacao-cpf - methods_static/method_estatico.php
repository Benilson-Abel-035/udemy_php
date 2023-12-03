<?php

	class CPFValidar {
		public static function validar($cpf) {
			if (is_numeric($cpf) && $cpf > 0) {
				return true;
			}else {
				return false;
			}
		}
	}

$cpf = 1212;

if (CPFValidar::validar($cpf)) {
	echo "'CPF válido";
}else {
	echo "'CPF inválido";
}

?>