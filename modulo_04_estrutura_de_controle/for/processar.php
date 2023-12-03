<?php

$anoAtual = filter_input(INPUT_POST, "anoAtual", FILTER_SANITIZE_STRING);
$anoNasc = filter_input(INPUT_POST, "anoNasc", FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, "name" , FILTER_SANITIZE_STRING);

echo "Ano atual: " . $anoAtual . "<br>";
echo "Ano Nascimento: " . $anoNasc . "<br>"; 
echo "Ano Nascimento: " . $nome;