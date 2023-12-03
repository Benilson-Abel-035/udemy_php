<form>
	<input type="text" required name="nome" placeholder="Digite seu nome">
	<input type="date" required name="date">
	<input type="email" required name="email" placeholder="Digite seu email">
	<input type="password" required name="senha" placeholder="Digite sua senha">
	<input type="submit" value="Envair">
</form>

<?php
// recebendo os valores dos campos do input pel via $_GET;

if (isset($_GET)) {
	foreach ($_GET as $ValorTypeInput => $valorDoCampo) {
		
	echo $ValorTypeInput;
	echo ": ".$valorDoCampo;

	echo "<hr>";
	}
}
?>