<?php 

	$conn = new mysqli("localhost", "root", "", "udemy_php7");

	if ($conn->connect_error) {
	 	echo "Erro!" . $conn->connect_error;
	 } 

	$query = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES (?,?)");

	$login = "udemy_php7";
	$password = "@gmail_php7";

	$query->bind_Param("ss", $login, $password);
	
	if ($query->execute()) {
		 	echo "Dados inserido com sucesso!";
		 }else {
		 	echo "Erro";
		 }

	$login = "CursoemVideo";
	$password = "@pt-br";

	if ($query->execute()) {
		 	echo "Dados inserido com sucesso!";
		 }else {
		 	echo "Erro";
		 }
?>