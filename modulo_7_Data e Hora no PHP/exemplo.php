<?php

echo "Fixando data e hora no php<hr>";

// linha de comando para definir a funcao date, ela sempre precisar de uma paramentro para ser definido;

// declarações: 

// d/m/Y -> dia, mês e ano; 
// H -> Horas; 
// i -> Minutos; 
// s -> Segundos; 
// l -> Dia da semana;

// echo "data: ". $date = date("d/m/Y H:i:s");

echo "Fixando conceito de TimeTump<br>";
 
 // Linha de comando para exibir TimeTump;
// echo $ttp = "TimeTump: ".time();
 
// linha de comando para definir o TimeTump; 
// strtotime("");
$ttp = strtotime("2002-05-05"); 
echo "data marcada: ".date("l, d/m/Y", $ttp);

?>