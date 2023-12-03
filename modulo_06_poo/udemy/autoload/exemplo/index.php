<?php

	function __autoload($nomeClasse) {

		require_once("$nomeClasse.php");

		// var_dump($nomeClasse);

	}

	$CadastrarUsuario = new NovoUsuario(" ", " ", " ");
	var_dump($CadastrarUsuario);
	echo "<hr>";

	$CadastrarUsuario->setNome("Jeremias M. Abel");

	echo $CadastrarUsuario;
	echo "<br>";

	$CadastrarUsuario->Cadastrar("Lávida", "lavida@gmail.com", "FR4NCK13");

	echo "<br>";
	$CadastrarUsuario->Atualizar("Lávida01", "lavida@gmail.com", "FR4NCK13");

	echo "<br>";
	echo $CadastrarUsuario->Listar() . "<br>";
	echo $CadastrarUsuario->Deletar(). "<br>";

	echo $CadastrarUsuario;
?>