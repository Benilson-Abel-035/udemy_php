<?php 

	$conn = new mysqli("localhost", "root", "", "udemy_php7");

	if ($conn->connect_error) {
	 	echo "Erro!" . $conn->connect_error;
	 } 

	$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

	$result->fetch_assoc();

	$data = array();

	foreach ($result as $row) {
		foreach ($row as $key => $value) {			
			echo "<strong>" .$key. ":</strong>". $value. "<br>";
		}
		echo "===============================<br>";
			array_push($data, $row);
	}

	echo '<hr>';
	echo"<strong>Type Data::Var_dump::</strong>";
	var_dump($row);
	echo '<hr>';

	echo "<strong>JSON::</strong>".json_encode($data);
?>