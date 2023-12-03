<form>
	<input type="date" name="anoAtual">
	<input type="date" name="anoNasc">
	<input type="txt" name="name">
	<input type="submit" value="Ok">
</form>

<?php

$anoAtual = filter_input(INPUT_GET, "anoAtual", FILTER_SANITIZE_STRING);
$anoNasc = filter_input(INPUT_GET, "anoNasc", FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_GET, "name" , FILTER_SANITIZE_STRING);

echo "Ano atual: " . $anoAtual . "<br>";
echo "Data de Nascimento: " . $anoNasc . "<br>"; 
echo "Nome Completo: " . $nome;
echo "<br>";

@$idade = ($anoAtual - $anoNasc);

if (isset($idade)) {
	echo "A sua idade é: " . $idade;
}else {
	echo "Idade inválida";
}




 