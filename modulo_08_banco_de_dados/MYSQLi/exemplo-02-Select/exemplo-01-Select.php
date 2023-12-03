<?php  
	
	echo "Fixando classes mysqli<br>";

	$conn = new mysqli("localhost", "root", "", "udemy_php7");

	if ($conn->connect_error) {
		echo "Erro na Conexão" . $conn->connect_error;
	}

	$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

	$dadosArray = array();

	while ($row = $query->fetch_assoc()) {
		echo "<hr>";
		array_push($dadosArray, $row);
		var_dump($row);
	}

	echo "<hr>";
	echo json_encode($dadosArray);

?>