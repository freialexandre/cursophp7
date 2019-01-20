<?php


class Endereco {

	private $logradouro;
	private $numero;
	private $cidade;

	//metodo construtor - executa automaticamente
	public function __construct($a, $b, $c) {
		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;

	}
	
	//metodo DESCONSTRUTOR - util para remover da memoria - tmb executa automaticamente 
	public function __destruct() {
		var_dump("DESTRUIR");
	}

	public function __toString() {
		return $this->logradouro . ", " . $this->numero . ", " . $this->cidade;
	}

}




$meuEndereco = new Endereco("Beija_Flor", "327", "Bauru");

var_dump($meuEndereco);

echo "<br>";

echo $meuEndereco;


unset($meuEndereco);






?>