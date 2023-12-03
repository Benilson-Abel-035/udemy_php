<?php

echo "Fixando atributo e method<br>";

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
		return $thi*s->ano;
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

$object = new Carro();
$object->setModelo("13");
$object->setMotor("2.8000");
$object->setAno("2002");
// print_r($object->exibir());
var_dump($object->exibir());


?>
