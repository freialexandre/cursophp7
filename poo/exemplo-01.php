<?php

class Pessoa {

	public $nome;

	public function falar() {

		// Acesso a algum recurso da propria classe (dentro da mesma classe instanciada)
		return "Conteúdo da variavel NOME é: " . $this-> nome;
	}

}

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();






?>