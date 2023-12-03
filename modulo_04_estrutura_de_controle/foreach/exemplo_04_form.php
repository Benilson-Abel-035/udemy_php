<h1>Foreach</h1>
		<form>
			<input type="text" name="nome">	
			<input type="date" name="nascimento">
			<input type="submit" value="Ok">	
		</form>
<?php

	if (isset($_GET)) {
		foreach ($_GET as $campos => $valores) {
			echo "Nome do Campo: " . $campos . "<br>";
			echo "Nome do Valor: " . $valores. "<hr>";
		}
	}

	echo "<h4>Mercado Clássico</h4>";

	echo "<hr>";

	$games = array (
		"Sega" => "Sonic",
		"Nintendo" => "Super Mario",
		"PlayStartion" => "PES",
		"PC Games" => "Naruto Storm 4",
		"X Box" => "Call of Duty"
		);

	foreach ($games as $empresas => $produtos) {
		echo "Nome da Empresa: " . $empresas . "<br>";
		echo "Nome do Produto: " . $produtos . "<hr>";
	}