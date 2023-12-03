<?php

//include_once("config.php");
// linha de comando para exibir o directorio da session;
echo session_save_path();
echo "<br>";
var_dump(session_status());
if (!empty(session_start()) == session_destroy()) {
	
switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "Sessão desabilitadas";
		break;
	case PHP_SESSION_NONE:
		echo "Sessão desabilitadas, mas nenhuma existe";
		break;
	case PHP_SESSION_ACTIVE:
		echo "Sessão habilitadas, e uma existe";
		break;
	case session_start():
		echo "Não existe nenhuma session definida ou iniciada";
		break;
}
}
?>