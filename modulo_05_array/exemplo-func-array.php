<?php

	$pessoa = array();

		// function de array para adicionar elementos;

	array_push($pessoa, array(

		"nome" => "Abel",
		"idade" => "21",
		"sexo" => "M"

	));

	array_push($pessoa, array(

		"nome" => "Leonel",
		"idade" => "11",
		"sexo" => "M"

	));

// print_r($pessoa);

echo "Nome: ";
print_r($pessoa[0]["nome"]);
echo "<br>";
echo "Idade: ";
print_r($pessoa[0]["idade"]);
echo "<br>";
echo "Sexo: ";
print_r($pessoa[0]["sexo"]);

echo "<hr>";

echo "Nome: ";
print_r($pessoa[1]["nome"]);
echo "<br>";
echo "Idade: ";
print_r($pessoa[1]["idade"]);
echo "<br>";
echo "Sexo: ";
print_r($pessoa[1]["sexo"]);

echo "<hr>";

print_r($pessoa);