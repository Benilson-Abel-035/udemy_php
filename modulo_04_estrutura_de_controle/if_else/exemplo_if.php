<?php

$qualSuaIdade = 17;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualSuaIdade < $idadeCrianca) {
	echo "Você é criança";
}elseif ($qualSuaIdade < $idadeMaior) {
	echo "Você é jovem";
}elseif ($qualSuaIdade < $idadeMelhor) {
	echo "Você é adulto";
} else {
	echo "Você não tem uma idade válida"; 
}

echo "<br>";

// Comando ternario: posto a condição ($var < $var)? os sinal de (?) representa if "si" a condição é (true) e o else é representado por dois pontos (:). linda de comando: echo ($var < $var)?"True":"False"; 
echo ($qualSuaIdade > $idadeCrianca)?"Você é criança":"Você é jovem";
?>