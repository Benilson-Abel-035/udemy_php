<?php 

	require_once("config.php");

	// use Clients\Cadastro;

	// $cad = new Cadastro();
	// $cad->setNome("Benilson Abel");
	// $cad->setEmail("benilsonabel@gmail.com");
	// $cad->setSenha("FR4NCK13");
	
	// $cad->registrarVenda();

	// echo $cad;

	// ---------------------------------------//

	use Funcionarios\Cadastro;

	$cad02 = new Cadastro();

	$cad02->setNome("Benilson Abel");
	$cad02->setEmail("benilsonabel@gmail.com");
	$cad02->setSenha("FR4NCK13");
	$cad02->setnumFuncionario("040");
	$cad02->setCargo("Programador");
	$cad02->setSalario("50000");

	$cad02->CadastrarFuncionario(); 

	echo "<hr>";
	echo "<b>JSON</b>: " .$cad02;
	echo "<hr>";

	var_dump($cad02);
?>