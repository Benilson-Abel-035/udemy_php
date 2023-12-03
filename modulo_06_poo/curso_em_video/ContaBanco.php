<?php

	class ContaBanco {
		public $numConta;
		public $iban;
		protected $nomeBanco;
		protected $tipo;
		private $dono;
		private $saldo;
		private $status;

		// Methodo personalizados;

		public function abrirConta($t) {	
			$this->setTipo($t);
			$this->setStatus(true);
				if ($t == "CC") {
					$this->setSaldo(5000);
				}elseif ($t == "CP") {
					$this->setSaldo(10000); 
				}
		}

		public function fecharConta() {
			if ($this->getSaldo() > 0) {
					echo "<p>Conta com dinheiro. Não posso fechar!</p>";
				}elseif ($this->getSaldo() < 0) {
					echo "<p>Conta com débito. Inpossível encerrar!</p>";
				}else {
					$this->setStatus(false);
					echo "<p>Conta de ".$this->getDono()." fechada com sucesso!</p>";
				}
		}

		public function depositar($v) {
			if ($this->getStatus()) {
				$this->setSaldo($this->getSaldo() + $v);
				echo "<p>Deposito de $v KZ autorizado na conta de ".$this->getDono()."  realizada com sucesso.</p>";
				
			}else {
				echo "<p>Conta fechada. Não consigo depositar.</p>";
			}
		}

		public function sacarDinheiro($v) {
			if ($this->getStatus()) {
				if ($this->getSaldo() >= $v) {
					$this->setSaldo($this->getSaldo() - $v);
					echo "<p>Saque de $v KZ autorizado na conta ".$this->getDono().".</p>";

					
				echo "<p>Saldo atual: ".$this->getSaldo()."</p>";
				
				}else {
					echo "<p>Saldo insuficiente para sacar dinheiro da conta.</p>";
				}
			}else {
				echo "<p>Não posso sacar dinheiro de uma conta fechada.</p>";
			}
		}

		public function pagarMensal() {
			if ($this->getTipo() == "CC") {
				$v = 6500;
			}elseif ($this->getTipo() == "CP") {
					$v = 5500;
			}
			if ($this->getStatus()) {
				if ($this->getSaldo() > $v) {
					$this->setSaldo($this->getSaldo() - $v);
					echo "<p>".$this->getDono()." pago a mensalidade de $v KZ com sucesso.</p>";
						echo "<p>Saldo atual: ".$this->getSaldo()."</p>";

				}else {
					echo "<p>Erro problemas com a conta não posso cobrar.</p>";
				}
			}
		}

		// Methodos especiais get, set e __construct;

		public function __construct() {
			$this->setSaldo(0);
			$this->setStatus(false);
			echo "<p>Conta criada com sucesso!</p>";
		}

		//  set;


		public function setnumConta($n) {
			$this->numConta = $n;
		}

		public function setnomeBanco($bc) {
			$this->nomeBanco = $bc;
		}

		public function setIban($b) {
			$this->iban = $b;
		}

		public function setTipo($t) {
			$this->tipo = $t;
		}

		public function setDono($d) {
			$this->dono = $d;
		}


		public function setSaldo($s) {
			$this->saldo = $s;
 		}


		public function setStatus($status) {
			$this->status = $status;
		}

		// get;

		public function getnumConta() {
			return $this->numConta;
		}

		public function getnomeBanco() {
			return $this->nomeBanco;
		}


		public function getIban() {
			return $this->iban;
		}

		public function getTipo() {
			return $this->tipo;
		}


		public function getDono() {
			return $this->dono;
		}


		public function getSaldo():float {
			return $this->saldo;
		}

		public function getStatus() {
			return $this->status;
		}
	}

?>