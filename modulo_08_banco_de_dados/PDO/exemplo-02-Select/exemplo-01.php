<?php 

	$conn = new PDO("mysql:dbname=udemy_php7;host=localhost", "root", "");

	$query = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

	$query->execute();

	$results = $query->fetchAll(PDO::FETCH_ASSOC);

	foreach ($results as $row) {
		foreach ($row as $key => $value) {
			echo "<strong>" .$key. ":</strong>" .$value. "<br>";
		}
		echo "===============================<br>";
	}

	// var_dump($results);

?>