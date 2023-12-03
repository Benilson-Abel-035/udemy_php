<?php

/**
 Class caneta
 */
class Caneta_02{
	public $modelo;
	public $cor ;
	private $ponta;
	protected $carga;
	protected $tampada;

	public function rabiscar() {
		if ($this->tampada == true) {
			echo "Erro! não posso rabiscar...";
		}else{
			echo "Estou rabiscando";
		}
	}
	public function tampar () {
		$this->tampada = true;
	}
	public function destampar() {
		$this->tampada = false;
	}
}
?>