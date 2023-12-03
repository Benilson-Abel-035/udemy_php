<?php
session_id('2qftscng26t2ol6j6gn3mnul59
');

include_once("config.php");

//echo $_SESSION['msg01'] = "Fixando ID de Session";
//echo "<br><br>";
// forçar novo id de session;
session_regenerate_id();
echo session_id();
echo "<br>";
var_dump($_SESSION);
?>