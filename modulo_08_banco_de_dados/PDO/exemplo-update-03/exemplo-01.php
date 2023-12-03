<?php 

	$conn = new PDO("mysql:host=localhost;dbname=udemy_php7", "root", "");

	$query = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD  WHERE idUsuario = :ID");

	$login = "Jeremias Programador";
	$password = "FR4CNK13";
	$id = 12;

	$query->bindParam(":LOGIN", $login);
	$query->bindParam(":PASSWORD", $password);
	$query->bindParam(":ID", $id);

	if ($query->execute() == true) {
		echo "Dados Atualizados";
	}else {
		echo "Erro";
	}

?>