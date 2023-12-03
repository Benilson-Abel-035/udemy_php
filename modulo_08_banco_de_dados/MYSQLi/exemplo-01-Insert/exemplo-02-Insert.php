<?php  
	
	echo "Fixando classes mysqli";

	$conn = new mysqli("localhost", "root", "", "udemy_php7");

	if ($conn->connect_error) {
		echo "Erro na Conexão" . $conn->connect_error;
	}

	$query = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha, idUsuario) VALUES (?, ?, ?)");

	$query->bind_param("ssi", $login, $pass, $id);

	$login = "Amanhã";
	$pass = md5("2023");
	$id = 4;

	$query->execute();

	exit();

	$login = "Sonia";
	$pass = "@gmail.123";

	$query->execute();	

	$login = "Mãe";
	$pass = "2008@gmail.com";

	$query->execute();	
?>