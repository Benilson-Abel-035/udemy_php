<?php

$diaDaSemana = date("w");

//echo $diaDaSemana;


switch ($diaDaSemana) {
	case '0':
		echo "Domingo";
		break;
	case '1':
		echo "Seguna-feira";
		break;
	case '2':
		echo "Terça-feira";
		break;
	case '3':
		echo "Quarta-feira";
		break;
	case '4':
		echo "Quinta-feira";
		break;
	case '5':
		echo "Sexta-feira";
		break;
	case '6': 
		echo "Sábado";
		break;
		default:
		echo "Nenhum dia de semana difinido!";
		break;
}

?>