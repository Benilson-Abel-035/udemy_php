<?php
	
	class CPFValidar {
		public static function validarCPFStatic($valor) {
			$valor = preg_replace('/[^0-9]/', '', $valor);
		// Remover caracteres não númericos;

			if (strlen($valor) != 11) {
				return false; // CPF válido deve ter 11 digitos numericos;
			}
			// Calculando o primeiro digito verifidador;
			$soma = 0;
			for ($i=0; $i < 9; $i++) { 
				$soma += intval($valor[$i]) * (10 - $i);
			}
			$primeiroDigito = 11 - ($soma % 11);
				if ($primeiroDigito > 9) {
					$primeiroDigito = 0;
				}
			
			// Calcula o segundo digito vereficador;
			$soma = 0;
				for ($i=0; $i < 10; $i++) { 
				 	$soma += intval($valor[$i]) * (11 - $i);
				 }
			$segundoDigito = 11 - ($soma % 11);
				if ($segundoDigito > 9) {
					$segundoDigito = 0;
		}
		// Verificar se os digitos verificardores calculados são iguais aos digitos do CPF;
			return $valor[9] == strval($primeiroDigito) && $valor[10] == strval($segundoDigito);
		}
	}

	$CPFValidar = "123.456.789-09";
	if (CPFValidar::validarCPFStatic($CPFValidar)) {
		echo "CPF válido: " . $CPFValidar;
	}else {
		echo "CPF inválido";
	}
?>