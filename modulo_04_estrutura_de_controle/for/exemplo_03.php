<?php

	echo "Fixando For <hr>";

	echo "Contagem Natural Crescente<hr>";
	for ($i=0; $i <= 10; $i++) { 
		echo "N° " . $i . "<br>";
	}
	echo "<hr>";
	echo "Contagem Natural Crescente com Encremento<hr>";
	for ($i=0; $i <= 100; $i+=5) { 
		echo "N° " . $i . "<br>";
	}

	echo "<hr>";
	echo "Contagem Natural Decrescente<hr>";

	for ($i=100; $i > 0 ; $i--) { 
		echo "N° " . $i . "<br>";
	}
	echo "<hr>";
	echo "Contagem Natural com Desencrescente<hr>";
	for ($i=100; $i > 0; $i-=5) { 
		echo "N° " . $i . "<br>";
	}

	echo "<hr>";
	echo "Abecedário<hr>";
	for ($i= "A"; $i < "Z" ; $i++) { 
		echo "Letra: " . $i . "<br>";
	}
	echo "<hr>";
	echo "Ano<hr>";
	for ($i=2023; $i >= 2002; $i--) { 
		echo "Ano " . $i . "<br>"; 
	}

?>