<?php

echo "Fixando novos recursos para function";
// Linha de comando para definir o tipo de dado e o retorno pelo paramentro na funcao;
function soma(float ...$valores):float {
	// linha de funcao para retornar e somar os valores chamados pelos array definido pelo paramentro na function(int ...$var): int /// return array_sum($var);
	return array_sum($valores);
}
echo "<hr>";
var_dump(soma(2,2));
echo "<br>"; 
var_dump(soma(2,3)); 
echo "<br>"; 
var_dump(soma(10,2));
echo "<br>";  
var_dump(soma(6.5,5)); 
echo "<br>";
var_dump(soma(40.5,10));

echo "<hr>";

function abc(string...$az) {
	 return $az;
}
echo "<pre>";
var_dump(abc(
	'localhost', 
	'127.0.0.1', 
	'usuario',
	'root',
	'senha',
	'12345678',
	'dbname',
	'p.a.e'	
		));
echo "</pre>";

?>

