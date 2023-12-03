<?php

echo "<select>";
echo '<option value="">Numeração</option>';
for ($i=0; $i <= 100; $i+= 1) { 

	if ($i > 10 && $i < 35) continue;
	if ($i > 45 && $i < 85) continue;
	if ($i > 95) break; 
echo '<option value="'.$i.'">'.$i.'</option>';
}
echo "</select>";
echo "&nbsp;&nbsp;";
echo "<select>";
echo '<option value="">Ano lectino</option>';
	
for ($ano=date("Y"); $ano >= date("Y")-3; $ano--) { 
	if ($ano < 2015 && $ano > 1990)continue;
	if ($ano > 1935 && $ano < 1975) continue;
echo '<option value="'.$ano.'">'.$ano.'</option>';
	 
}
echo "</select>";

?>