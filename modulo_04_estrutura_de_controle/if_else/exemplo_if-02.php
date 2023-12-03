<?php
	
	// nome
	$nome = "Benilson";
	// $apelido = "Abel";

	// idade 
	$suaidade = 21;
	$crianca = 9;
	$adolescente = 11;
	$jovem = 18;
	$adulto = 35;
	$idoso = 65;

	if ($suaidade <= $crianca && $nome === "Besónil") {
			echo "Você é Criança";
		}	else if ($suaidade <= $adolescente && $nome === "Dicionário") {
			echo "Você é Adolescente";
		} else if ($suaidade <= $jovem && $nome === "Abel") {
			echo "Você é Jovem";
		} else if ($suaidade <= $adulto && $nome === "Benilson") {
			echo "Você é Adulto";
		} else if ($suaidade <= $idoso && $nome === "Lávida") {
			echo "Você é Idoso";
		}else {
			echo "Idade invália você está morto.";
		}

	// Operador Ternario
		echo "<hr>";
		echo $suaidade <= $adulto? "<b>Sua Idade:</b> Você é adulto": "<b>Sua Idade:</b> Você ainda não é adulto";
?>