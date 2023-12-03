<?php

include_once("config.php");

echo $_SESSION['msg01'] = "Fixando ID de Session";
echo "<br><br>";
echo "id: ".session_id();
echo "<br>";
//session_unset();
var_dump($_SESSION);
//var_dump($_SESSION);

?>