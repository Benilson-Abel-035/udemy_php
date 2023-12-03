<?php

	echo "Fixando While <hr>";

	$numeracao = true;

	while ($numeracao) {
	
		for ($i=0; $i < 100 ; $i++) { 
			echo $i . "-"; 
			$numeracao = false;
		}	
	}
	
