<?php 

	$conn = new PDO("mysql:host=localhost;dbname=udemy_php7", "root", "");

	$query = $conn->prepare("DELETE FROM tb_usuarios WHERE idUsuario = :ID");

	$id = 14;

	$query->bindParam(":ID", $id);

	if ($query->execute()) {
		echo "Dados Deletado com sucesso!";
	}else {
		echo "Erro";
	}

?>