<?php  
	
	echo "Fixando classes mysqli<br>";

	$conn = new mysqli("localhost", "root", "", "udemy_php7");

	if ($conn->connect_error) {
		echo "Erro na Conexão" . $conn->connect_error;
	}

	$result = $conn->query("UPDATE tb_usuarios SET deslogin = 'Semana', dessenha = 'Hoje' WHERE idUsuario = 2 ");

?>