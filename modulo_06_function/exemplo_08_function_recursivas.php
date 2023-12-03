<?php

echo "Fixando function recursivas";

$hierarquia = array(
	 array(
	 	'nome_cargo' => 'CEO', 
	 	'subordinados' => array(
	 			// inicio do director comercial;
	 		array(
	 			'nome_cargo' => 'Director Comercial',
	 			'subordinados' => array(
	 				// inicio Director de vendas
	 				array(
	 					'nome_cargo' => 'Director de vendas',
	 					'subordinados' => array(
	 						//inicio Supervisor de vendas
	 						array(
	 							'nome_cargo' => 'Supervisor de vendas'
	 						),
	 						//fim Supervisor de vendas
	 						// inicio Funcionario de vendas
	 						array('nome_cargo' => 'Funcionario de vendas')
	 					)
	 					// fim Funcionario de vendas
	 				),
	 				// Fim Director de vendas
	 				// inicio Supervisor de relatório
	 				array(
	 					'nome_cargo' => 'Supervisor de relatório'
	 				) 
	 				// Supervisor de relatório
	 			)
	 		),
	 		// fim do director comercial;
	 		// inicio Director de relações pública;
	 		array(
	 			'nome_cargo' => 'Director de relações pública',
	 			'subordinados' => array(
	 				array('nome_cargo' => 'Assistente de relações pública'),
	 				// inicio
	 				array('nome_cargo' => 'Assistente de marting Digital',
	 					'subordinados' => array(
	 						array(
	 							'nome_cargo' => 'Comprador',
	 							'nome' => 'Jeremias M. Abel'
	 						) 
	 					)
	 				)
	 				// fim
	 			)
	 		)
	 		// fim Director de relações pública;
	 	)
	 )
);

echo "<hr>";

echo "<pre>";
function exibe($cargos) {
	
$html = '<ul>';
		foreach ($cargos as $cargo) {
			
		$html .= "<li>";
		$html .= $cargo['nome_cargo'];
			
			if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
				$html .= exibe($cargo['subordinados']);
			}
			
		$html .= "</li>";

	}
$html .= "</ul>";

	return $html; 
}

echo exibe($hierarquia);
echo "</pre>";

 // echo "<pre>";  
 // var_dump($hierarquia);
 // echo "</pre>";

?>