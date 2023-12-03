<?php

	// primeira maneira;
	function incluirClasses($nomeClasses) {
		if (file_exists("$nomeClasses.php") == true) {
			include_once("$nomeClasses.php");
		}
	}

	function incluirClassesDiretorio($nomeClasses) {
		if (file_exists("abstract" .DIRECTORY_SEPARATOR. "$nomeClasses.php")) {
			include_once("abstract" .DIRECTORY_SEPARATOR. "$nomeClasses.php");
		}
	}

	// Chamando as funções spl_autoload_register: para declarar todas as classes que estao em mesmo diretorio ou subdiretorios;
	// existe duas maneira para declarar;

	spl_autoload_register("incluirClasses");
	spl_autoload_register("incluirClassesDiretorio");

	// segunda maneira;
	spl_autoload_register(function ($nomeClasses) {
		if (file_exists("abstract" .DIRECTORY_SEPARATOR. "DB". DIRECTORY_SEPARATOR. "$nomeClasses.php")) {
			include_once("abstract" .DIRECTORY_SEPARATOR. "DB". DIRECTORY_SEPARATOR. "$nomeClasses.php");
		}
	});

	$CadastrarUsuario = new NovoUsuario("Lávida Programador", "programador@gmail.com", "FR4NCK13***");
	var_dump($CadastrarUsuario);
	echo "<hr>";

	$CadastrarUsuario->Cadastrar("Lávida", "lavida@gmail.com", "FR4NCK13");

	echo "<br>";
	$CadastrarUsuario->Atualizar("Lávida01", "lavida@gmail.com", "FR4NCK13");

	echo "<br>";
	echo $CadastrarUsuario->Listar() . "<br>";
	echo $CadastrarUsuario->Deletar(). "<br>";
	echo "<hr>";
	echo $CadastrarUsuario;
?>