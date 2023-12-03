<?php

	echo "Fixando For com Date";

	echo "<hr>";
	echo "Ano<hr>";
	for ($i=0; $i < 100 ; $i++) { 
		if ($i > 30 && $i < 70) continue; // Comando para verificar a continuação de uma instrução com condional; 
		if ($i === 85) break; // Comando para terminar a instrução;
		echo "Ano " . $i . "<br>"; 
	}

?>