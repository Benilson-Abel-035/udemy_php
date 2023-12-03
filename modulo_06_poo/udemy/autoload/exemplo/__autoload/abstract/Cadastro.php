<?php


	abstract class Cadastro implements DB {

		public $nome;
		public $email;
		public $senha;

		public function __construct($nome, $email, $senha) {
			$this->nome = $nome;
			$this->email = $email;
			$this->senha = $senha;
		}

		// get
		public function getNome() {
			return $this->nome;
		}
		public function getEmail() {
			return $this->email;
		}
		public function getSenha() {
			return $this->senha;
		}
		// set 
		public function setNome($nome) {
			return $this->nome = $nome;
		} 
		public function setEmail($email) {
			return $this->email = $email;
		}
		public function setSenha($senha) {
			return $this->senha = $senha;
		}
	}
?>