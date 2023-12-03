<?php

echo "Fixando function passsagem por referencia<hr>";

$a = 10;

// Passagem por referencia é pegar o valor de uma var fora do escopo da function e atribuir no paramentro da function para returnar o valor total que vai gerar dentro da function passado pelo argumento e na var;
// Quer dizer que a var e function vao ter os mesmo vaalores gradualmente toda vez quando forem chamadas;

// linha de comando para passagem por referencia:;
// sintaxe function trocaValor(&$n);  
function trocarValor(&$n) {
	$n += 50;
	return  $n;  
}
echo "valor da var a: $a<br>";

echo "<br>valor da function: ".trocarValor($a);
echo "<br>valor da var a: $a<br>";

echo "<br>valor da function: ".trocarValor($a);
echo "<br>valor da var a: $a<br>";

echo "<br>valor da function: ".trocarValor($a);
echo "<br>valor da var a: $a<hr>";

$boolean = 25.7;
function numero(&$int) {
	$int += 10;
	return $int;
}
echo "Valor da var boolean: $boolean <br>";
echo "Valor da function: ".numero($boolean);
echo "<br>";
echo "Valor da function: ".numero($boolean);
echo "<br>";
echo "Valor da var boolean: $boolean <br>";

?>