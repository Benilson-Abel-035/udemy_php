<?php 	
// extendendo a class
class Toyota extends Automovel {

    public function exibir() {
        return "Informações";
    }

	public function informacao($nome, $ano, $motor) {
		$this->nome = $nome;
		$this->ano = $ano;
		$this->motor = $motor;
	}

// methos __contruct para exibir o objecto da class como string
	public function __toString() {
		// o valor da __toString so pode ser o returno
		return "Automovel " . "<b>" .$this->nome . "</b>" . " teve o seu grande lançamento em " . "<b>" . $this->ano . "</b>" . " com motor ". "<b>" . $this ->motor . "</b>" . "."; 
    }   

}


?>