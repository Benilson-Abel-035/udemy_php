<?php 

	namespace Funcionarios;

	class Cadastro extends \Cadastro {
		private $numFuncionario;
		private $cargo;
		private $salario;

		public function getnumFuncionario():string {
			return $this->numFuncionario;
		}
		public function getCargo():string {
			return $this->cargo;
		}
		public function getSalario():string {
			return $this->salario;
		}

		// set
		public function setnumFuncionario($numF) {
			return $this->numFuncionario = $numF;
		}
		public function setCargo($cargo) {
			return $this->cargo = $cargo;
		}
		public function setSalario($salario) {
			return $this->salario = $salario;
		}

		public function CadastrarFuncionario() {
			echo "Foi cadastrado um novo funcionario " .$this->getNome(). " com numFuncionario " .$this->getnumFuncionario() . " seu cargo é " .$this->getCargo(). " e seu salario " . $this->getSalario() . ".";
		}
		public function __toString() {

			return json_encode(array(

				"nome"=>$this->getNome(),
				"email"=>$this->getEmail(),
				"senha"=>$this->getSenha(),
				"numFuncionario"=>$this->getnumFuncionario(),
				"cargo"=>$this->getCargo(),
				"salario"=>$this->getSalario()

			));
		}
	}

?>