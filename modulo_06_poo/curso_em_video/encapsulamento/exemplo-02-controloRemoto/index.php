<?php 

	echo "<h1>Controlo remoto</h1>";

	include_once('ControloRemoto.php');

	echo "<pre>";

	$controls = new ControloRemoto(30);
	var_dump($controls);

	
	echo "</pre>";

?>