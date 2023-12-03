<?php

	echo "Fixando While <hr>";

	$numeracao = true;

do {

	for ($i=0; $i < 100; $i++) { 
		echo $i . "-";
	}

} while($numeracao === 100);
