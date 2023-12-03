<?php
		// atribuir uma var de outro arquivo;
	$pagina = $paginacao;
		// verificar se a var existe;
	if (isset($pagina)) {
		// incluindo arquivo;
		include 'exemplo_01.php';
		// var_dump($pagina);
		unset($pagina);
		// tratando erro;
		echo @$pagina;
	}else {
		echo "Arquivo não existe";
}
?>