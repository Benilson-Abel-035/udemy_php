<?php

echo "Fixando function passsagem de valor por valor<hr>";
// É pegar o valor da var definida fora do escopo da function e passar para o argumento para returnar o valor no paramentro da function;
 
 $a = "linda ";

function trocaValor($p){
	$p .= "palavra";
	return $p;
}
echo "<br>";
echo "Valor da var a: ".$a."<br>";

echo "Valor da var na function: ".trocaValor($a);
echo "<br>";
echo "<br>";
echo "<hr>";

echo "<br>";

$valor = 10;

function trocaValor1($n){
	$n += 50;
	return $n;
}

echo "Valor da var a: ".$valor."<br>";

echo "Valor da var na function: ".trocaValor1($valor);
echo "<br>";
echo "<br>";
echo "<hr>";

?>