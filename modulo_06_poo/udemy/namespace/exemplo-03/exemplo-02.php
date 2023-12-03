<?php

	require_once("config.php");

	use Clients\Cadastro;

	$cad = new Cadastro();
	$cad->setNome("Benilson Abel");
	$cad->setEmail("benilsonabel@gmail.com");
	$cad->setSenha("FR4NCK13");
	
	$cad->registrarVenda();

	echo $cad;

?>