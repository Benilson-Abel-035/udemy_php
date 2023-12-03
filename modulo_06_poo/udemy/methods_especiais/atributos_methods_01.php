<?php

echo "Fixando atributo e method";

class Carro {
	
	private $modelo;
	private $motor;
	private $ano;


///////////////////////////////////
public	function getModelo():string{//Method get: serve para pegar os valores;
		return $this->modelo;
	}

public	function setModelo($modelo){// Method get: serve para definir os valores;
		$this->modelo = $modelo;
}
////////////////////////////////////
public	function getMotor():float{
		return $this->motor;
}

public	function setMotor($motor){
		$this->motor = $motor;
}
/////////////////////////////////
public	function getAno():int{
		return $this->ano;
}

public	function setAno($ano){
		$this->ano = $ano;
	}

///////////////////////////////

public function exibir() {
	// returnando array no method;
	return array(
		// referenciar os atributos no array;
		'modelo' => $this->getModelo(),
		'motor' => $this->getMotor(),
		'ano' => $this->getAno() 
		);
	}
}

echo "<br>";

$produtos = new Carro();
$produtos->setModelo("FR4NCK13");//referenciar o atributo pelo method set();
$produtos->setMotor("221.65");
$produtos->setAno("2012");
var_dump($produtos->exibir());

?>
