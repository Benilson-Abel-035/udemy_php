<?php

/**
 Class caneta
 */
class Caneta{
	var $modelo;
	var $cor ;
	var $carga;
	var $ponta;
	var $tampada;

	function rabiscar() {
		if ($this->tampada == true) {
			echo "Erro! não posso rabiscar...";
		}else{
			echo "Estou rabiscando";
		}
	}
	function tampar () {
		$this->tampada = true;
	}
	function destampar() {
		$this->tampada = false;
	}
}
?>