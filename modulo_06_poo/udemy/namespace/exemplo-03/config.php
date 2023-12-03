<?php 

	spl_autoload_register(function($nomeClasses){
		
		// var_dump($nomeClasses);
		
		$dirClasses = "classes";
		$fileName = $dirClasses .DIRECTORY_SEPARATOR. $nomeClasses . ".php";
			if (file_exists($fileName)) {
				require_once($fileName);
			}
	});

?>