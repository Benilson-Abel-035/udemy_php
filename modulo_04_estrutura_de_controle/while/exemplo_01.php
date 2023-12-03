<?php

echo "<pre>Fixando Do While</pre>";

$total = 150;
$desconto = 0.9;
do {
 
 $total*= $desconto;
	
} while ($total > 100);


echo "Valor total: ".$total;
?>