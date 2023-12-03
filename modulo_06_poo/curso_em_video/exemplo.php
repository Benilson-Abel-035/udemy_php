<?php

echo "Fixando Poo com Class";
echo "<br><br>";

require_once("class/Caneta_02.php");

$c1 = new Caneta;
$c1->modelo = "Bravo";
$c1->cor = "Azul";
$c1->carga = 60;
$c1->ponta = 0.6;
$c1->destampar();
$c1->rabiscar();

echo "<br><br>";

print_r($c1);

echo "<br><br>";

$c2 = new Caneta;
$c2->modelo = "OnDigital";
$c2->cor = "Yellow";
$c2->carga = 35;
$c2->ponta = 0.3;
$c2->tampar();
$c2->rabiscar();

echo "<br><br>";

print_r($c2);
?>