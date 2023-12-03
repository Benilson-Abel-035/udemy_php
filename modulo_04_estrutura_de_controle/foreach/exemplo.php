<?php

echo "<pre>Fixando Foreach</pre>";

$meses = array(
	"Janeiro", "Fevereiro", "Março",
	"Abril", "Maio", "Junho",
	"Julho", "Agosto", "Setembro",
	"Outubro", "Novembro", "Dezembro"
	 );
foreach ($meses as $index => $mes ) {
	echo "O indece do : ".$index."<br><br>";
	
	echo "O mês é: ".$mes."<br>";
}
//print_r($meses);
?>