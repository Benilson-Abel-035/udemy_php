<?php

echo "Fixando TimeTump<hr>";

// $timeTump = strtotime("05-05-2002");

$timeTump = strtotime("+1 week + 1 day");

echo "Exibir TimeTump: $timeTump";

echo "<hr>";

echo "Date do TimeTump: ".date('d/m/Y H:i:s', $timeTump);



?>