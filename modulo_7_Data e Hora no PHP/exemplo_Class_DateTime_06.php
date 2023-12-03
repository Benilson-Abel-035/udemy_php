<?php

echo "Fixando function setLocale<hr>";

$dt = new DateTime();

echo "1° Date: ".$dt->format("d/m/Y H:i:s");

echo "<br>";

///////////////////////////////////

$periodo = new DateInterval("P8D");
$dt->add($periodo);

echo "<br>";
echo "2° Date: ".$dt->format("d/m/Y H:i:s");

?>
