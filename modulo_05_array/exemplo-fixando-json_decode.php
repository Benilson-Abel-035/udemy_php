<?php

$json = '[{"nome":"Abel","idade":"21","sexo":"M"},{"nome":"Leonel","idade":"11","sexo":"M"}]';
// gerando o json_decode: converter json em array;
$dadosJson = json_decode($json, true);

var_dump($dadosJson);