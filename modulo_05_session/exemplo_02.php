<?php

include_once("config.php");

echo $_SESSION['msg'];
echo "<br>";
// session_unset($_SESSION['']) linha de comando para limpar uma var de session. obs: quando definida vazia ela a limpa todas a var de session;

//session_unset($_SESSION['nome']);


//session_destroy($_SESSION['']): linha de comando para apagar uma var de session. obs: quando definida vazia ela a apagar todas a var de session;
echo $_SESSION['nome'];



?>