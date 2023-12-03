<?php

echo "<pre>Fixando while</pre>";

$ronda = true;

while ($ronda) {
	$voltas = rand(1,10);
	if ($voltas === 6) {
			echo "Seis";
			$ronda = false;
		}else {
			echo $voltas." . ";
		}
}

?>