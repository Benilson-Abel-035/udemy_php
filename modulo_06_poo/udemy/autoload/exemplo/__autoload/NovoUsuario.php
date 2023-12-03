<?php

	class NovoUsuario extends Cadastro {
		
		public function Cadastrar($nome, $email, $senha) {
			$this->nome = $nome;
			$this->email = $email;
			$this->senha = $senha;

			echo "Cadastrar Usuário";
		}
		public function Listar() {
			echo "Listar Usuário";
		}

		public function Atualizar($nome, $email, $senha) {
			$this->nome = $nome;
			$this->email = $email;
			$this->senha = $senha;

			echo "Atualizar Usuário";
		}

		public function Deletar() {
			echo "Deletar Usuário";
		}

		// method toString
		public function __toString() {
			return "Meu nome é " .$this->nome. " meu email é " .$this->email. " e minha senha é " .$this->senha. "."; 
		}

	}

?>