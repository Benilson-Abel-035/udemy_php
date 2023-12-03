<?php 

	echo "Fixando e Gerando o JSON<hr>";

	$pessoa = array();

	// function de array para adicionar elementos;

	array_push($pessoa, array(

		"nome" => "Abel",
		"idade" => "21",
		"sexo" => "M"

	));

	array_push($pessoa, array(

		"nome" => "Leonel",
		"idade" => "11",
		"sexo" => "M"

	));

echo "<hr>";

// gerando json_encode: transformar um array em json;

echo json_encode($pessoa);