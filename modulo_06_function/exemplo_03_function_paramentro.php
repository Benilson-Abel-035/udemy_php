<?php
echo "<hr>Fixando function por paramentro<hr>";
// linha de comando para declarar paramentro dentro de uma funcao;
function empresa($nome, $funcionarios, $cargo, $salario=10000){
	 // linha de comando para concatenar e returnar o valores dos paramentro;
	 return $nome. $funcionarios. $cargo .$salario;		
}

// linha de comando par exibir e atribir os valores do paramentro na funcao;
echo (empresa("Nome empresa: "."INNOSOFT <br>"."Funcionario: ","Jeremias M. Abel<br>"."Cargo: ","CEO<br>"."Salário:"));

echo '<hr>Fixando function por paramentro com return $cadastro = func_get_args()<hr>';

function sistema() {
	// linha de comando para gerar uma array de argumentos para declarar na funcao como paramentro;
	return $cadastro = func_get_args(); 
}

print_r(sistema("<br>localhost: "."127.0.0.1<br>", "usuario: "."root<br>", "senha:"." 12345678<br> ","dbname: "."cadastroLogin<br>"))
?>