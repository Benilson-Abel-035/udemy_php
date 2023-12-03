<?php

	$salario = 2000;

	// quantidade;

	$salarioM = 1500;
	$salarioMTXT = 2500;
	$salarioMD = 4000;
	$salarioMX = 10000;

	//idade; 
	$idade = 21;
	$idadeM = 15;
	$idadeMD = 25;
	$idadeMX = 35;

// Operador Ternário;

echo $salario <= $salarioM && $idade <= 15 ? "Você é um Dev Junior.<hr>" : "Você ainda não és um Dev.<hr>";
echo $salario <= $salarioMTXT && $idade <= 21 ? "Você é um Dev Junior.<hr>" : "Você ainda não és um Dev.<hr>";
echo $salario <= $salarioMD && $idade <= 25 ? "Você é um Dev Senior.<hr>" : "Você ainda não és um Dev.<hr>";
echo $salario <= $salarioMX && $idade <= 35 ? "Você é um Dev Pleno.<hr>" : "Você ainda não és um Dev.<hr>";

?>