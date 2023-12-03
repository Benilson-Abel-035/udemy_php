<?php 

	$conn = new PDO("mysql:host=localhost;dbname=udemy_php7", "root", "");

	$query = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES 
		(:LOGIN, :PASSWORD)");

	$login = "Jeremias M. Abel";
	$password = "12345678";

	$query->bindParam(":LOGIN", $login);
	$query->bindParam(":PASSWORD", $password);

	// $query->execute();

	if ($query->execute() == true) {
		echo "Inserido Ok!";
	}else {
		echo "Erro";
	}


?>