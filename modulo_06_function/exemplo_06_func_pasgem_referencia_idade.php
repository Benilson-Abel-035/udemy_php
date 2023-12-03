<?php

echo "Fixando function passsagem por referencia";
echo "<pre>";
// Linha de comando para criar uma array;
$pessoa = array(
	'nome' => 'Benilson Abel', 
	'idade' => 21,
	'sexo' => 'M',
	'altura' => 1.77,
	'peso' => 97.5,
	'vivo' => true,
	'nacionalidade' => 'Angola'
	);
// Linha de comando, para criar um foreach para percorrer o array e atribuir o a passagem por referencia &$var;
// print_r($pessoa);
foreach ($pessoa as $key => &$value) {
	// echo "Valor: $value<br>";
	if (gettype($value) === 'string') $value .= ' /// I have life now'; {
		echo "$key";
		echo ": $value<br>";
	}
}
print_r($pessoa);
echo "</pre>";

echo "<hr>";

echo "<pre>";
$pessoa = array(
	'nome' => 'Benilson Abel', 
	'idade' => 21,
	'sexo' => 'M',
	'altura' => 1.77,
	'peso' => 97.5,
	'vivo' => true,
	'nacionalidade' => 'Angola'
	);

// print_r($pessoa);
foreach ($pessoa as $key => &$value) {
	// echo "Valor: $value<br>";
	if (gettype($value) === 'integer') $value += 10; {
		echo "$key";
		echo ": $value<br>";
	}
}
print_r($pessoa);
echo "</pre>";
?>