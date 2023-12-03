<?php

	echo "Fixando For com Date";

	echo "<hr>";
	echo "Ano<hr>";
	echo "<select>";
	for ($i= date("Y"); $i >= date("Y")-21;  $i--) { 
		echo "<option value='".$i."'>$i</option>"; 

	}
	echo "</select>";
?>