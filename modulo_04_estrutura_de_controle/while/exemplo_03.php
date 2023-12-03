<?php

	echo "Fixando While<hr>";

	$precoTotal = 150;
	$desconto = 0.9;
	
	 do {

	 	$precoTotal *= $desconto;

	 } while ($precoTotal > 100);

	echo "Desconto 10% da compra: " . $precoTotal;