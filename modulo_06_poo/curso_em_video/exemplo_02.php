<pre>
<?php

echo "Fixando Poo com Class";
echo "<br><br>";

require_once("class/Caneta_02.php");

$c1 = new Caneta_02;
$c1->modelo = "OnDigital";
$c1->cor = "Black";
//$c1->ponta = 0.6;
//$c1->carga = 45;
//$c1->tampada = true;

$c1->tampar();
$c1->rabiscar();
echo "<br><br>";
print_r($c1);

?>
</pre>