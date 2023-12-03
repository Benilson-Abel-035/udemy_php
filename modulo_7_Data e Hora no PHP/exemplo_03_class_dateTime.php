<?php

echo "Fixando Class DateTime<hr>";

// linha de comando para estanciar uma class definida pela instrução new;

$dt = new DateTime();

// linha de comando para referenciar um atribuir na class;
// basicamente estou definindo um valor para a var ou function que está dentro da class;

echo "Primeira Data: ".$dt->format("d/m/Y H:i:s");
echo "<hr>";

// linha de comando para estanciar uma nova class com o method constructor que é basicamente,
// um paramentro que a class recebi para executar function especificas;
// Informando data no method constructor;
// OBS: da siglas? 
// P: informe o periodo;
// 1...99: informe a quantidade do P;
// M ou D ou Y ect: informe o dia ou mês ou ano ect; 
$periodo = new DateInterval("P10D");

// linha de comando metodo add(): serve para adicionar uma data;
// obs: ela espera que você informe a data que desejas somar ou subtrair;
$dt->add($periodo); 

echo "Segunda Data: ".$dt->format("d/m/Y H:i:s");

?>