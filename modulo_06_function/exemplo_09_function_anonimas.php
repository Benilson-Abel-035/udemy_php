<?php

echo "Fixando function anonimas<hr>";
// linha de comando para declarar function anonimas;
// 1° Vai passar uma function como paramentro: entao usa a funcao anonima;
// 2° Vai atribuir numa var uma function: entao usa a function anonima;
// obs: uma function anonima nao tem nome e nao tem return;
function test($callback) {
	//processo lento;
	$callback();
	echo "<br>";
	// var_dump($callback);

}
// linha de comando para chamar ou exibir a function anonima;
test(function(){
	echo "Terminou";
});

?>