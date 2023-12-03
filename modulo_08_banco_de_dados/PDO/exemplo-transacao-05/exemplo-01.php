<?php 

	$conn = new PDO("mysql:host=localhost;dbname=udemy_php7", "root", "");

	$conn->beginTransaction(); // Iniciar transacao com a var da $conexao; 

	$query = $conn->prepare("DELETE FROM tb_usuarios WHERE idUsuario = ?");

	$id = 4;

	$conn->rollback(); // Cancelar a transacao;

	if ($query->execute(array($id)) == true) {
		echo "Trasanção feita com sucesso!";
	}else {
		echo "Erro!";
	}

	$conn->commit(); // Confirmar a transancao;



?>