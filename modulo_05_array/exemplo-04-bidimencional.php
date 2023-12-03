<?php


 $carro[0][0] = "TOYOTA";
 $carro[0][1] = "GM";
 $carro[0][2] = "CAMARO";
 $carro[0][3] = "ONIX";

// 

 $carro02[1][0] = "PORCHER";
 $carro02[1][1] = "FORD";
 $carro02[1][2] = "FUSION";
 $carro02[1][3] = "ECO SPORT";

// 

 $carro03[2][0] = "MERCEDES";
 $carro03[2][1] = "ILANTRA";
 $carro03[2][2] = "FIETA";
 $carro03[2][3] =   "JUPTER";

// linha de comando para trazer o ultimo elemento do array function end();

	if (!empty($carro03)) {
		echo "O primeiro elemento do array function current: " . current($carro03[2]);
		echo "<hr>";
	}else {
		echo "padrao";
	}


echo "Ultimo elemento do array function end: " . end($carro03[2]);
echo "<hr>";

