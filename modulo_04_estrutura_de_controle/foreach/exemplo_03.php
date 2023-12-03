<?php

	$frutas = array(
			"Manga", "Laranja", "Abacate",
			"Limão", "Abacaxi", "Banana",
			"Tangerina", "Abobora", "Morango",
			"Papaia", "Loengo", "Mamau"
	);

	foreach ($frutas as $index => $value) {
		echo "As frutas é: " . $index . "<br>"; 
		echo "As frutas é: " . $value . "<br>"; 
	}

	// print_r($frutas);