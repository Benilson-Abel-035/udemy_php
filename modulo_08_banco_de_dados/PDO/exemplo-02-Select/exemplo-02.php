<?php 

	$conn = new PDO("mysql:dbname=udemy_php7;host=localhost", "root", "");

	if ($conn) {
		echo "Conexão Ok!<hr>";
	}else {
		echo "Erro na conexão";
	}

	$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

	$stmt->execute();

	$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

	foreach ($results as $row) {
		foreach ($row as $key => $value) {
			echo "<strong>" .$key. ":</strong>" .$value. "<br>";
		}
		echo "=====================================<br>";
	}

	echo "<hr>";

?>