<?php
echo "<pre>";

require_once 'ContaBanco.php';
echo "<hr>";

$conta1 = new ContaBanco();

$conta1->abrirConta("CC");
$conta1->setnomeBanco("BFA");
$conta1->setnumConta("124.664.2334-2");
$conta1->setDono("Benilson .J. Abel");
$conta1->setIban("0055-2012.2563.22353.87986.1");
$conta1->depositar(10000);
$conta1->sacarDinheiro(5000);
$conta1->pagarMensal();
$conta1->sacarDinheiro(3500);
$conta1->fecharConta();

print_r($conta1);
echo "<hr>";
// 
// 

$conta2 = new ContaBanco();

$conta2->abrirConta("CP");
$conta2->setnomeBanco("BAI");
$conta2->setnumConta("165.894.098-0");
$conta2->setDono("Fernanda .A. Abel");
$conta2->setIban("0044-9034.2436.1674.9454.9");
// $conta2->depositar(1000);
$conta2->sacarDinheiro(10000);
$conta2->fecharConta();
// var_dump($conta2->getSaldo());

print_r($conta2);

echo "<hr>";
echo "</pre>";
?>