<?php

	echo "Fixando Switch<hr>";

	$paginacao = 9;

	$paginacao1 = 1;
	$paginacao5 = 5;
	$paginacao10 = 10;
	$paginacao3 = 3;

	switch ($paginacao) {
	 	case 0: 
	 		echo "Dashboard";
	 		break;
	 	case 1:
	 		echo "Cadastrar Usuário";
	 		break;
	 	case 2: 
	 		echo "Listar Usuário";
	 		break;
	 	case 5:
	 		echo "Editar Usuário";
	 		break;
	 	case 10:
	 		echo "Deletar Usuário";
	 		break;
	 	case 3:
	 		echo "Cadastrar evento";
	 		break;
	 	case '9':
	 		include 'index.php';
	 		break;
	 	default:
	 		echo "Pagina inválida";
	 		break;
	 } 
	 echo "<hr>";
	// print_r($paginacao);
?>