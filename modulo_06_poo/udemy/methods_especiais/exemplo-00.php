<?php

class Pessoa{
// Criando atributo;
public $nome; 
// Criando method;
public function falar() {
		return "O meu nome é: ".$this->nome; // Estanciando o atribbudo com a var interna $this->;
	}
}
 //instanciar a class; 
$benilson = new Pessoa();
// refereciando o atributo $nome; 
$benilson->nome = "Jeremias M. Abel";
// refereciando o methodo falar(); 
echo $benilson->falar();

?>