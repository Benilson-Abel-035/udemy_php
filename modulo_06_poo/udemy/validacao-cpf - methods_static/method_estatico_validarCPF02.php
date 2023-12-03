<?php
	
	class ValidarCPF {

		public static function ValidarCPFStatic($valor) {
			if (is_string($valor)) { // is_numeric($var) && $var > 0;
				return true;
			}else {
				return false;
			}
		} 

	}


// var_dump($dadosCPF);

// Atribuir valor com methodo estatico;

$ValidarCPFStatic = "Lavida"; //atribuir valor;

//verificar o methodo estatioco
if (ValidarCPF::ValidarCPFStatic($ValidarCPFStatic)) {
	echo "CPF estático válido: " . $ValidarCPFStatic;
}else{
	echo "CPF estático inválido: ";
}

?>