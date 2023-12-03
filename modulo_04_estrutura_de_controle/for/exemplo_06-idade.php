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
echo "Ano Nascimento: " . $anoNasc . "<br>"; 
echo "Ano Nascimento: " . $nome;
echo "<br>";

 
 echo "<select>";
	
echo "</select>";