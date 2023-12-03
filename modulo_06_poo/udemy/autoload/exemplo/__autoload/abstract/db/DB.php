<?php

	interface DB {

		public function Cadastrar($nome, $email, $senha);
		public function Listar();
		public function Atualizar($nome, $email, $senha);
		public function Deletar();

	}

?>