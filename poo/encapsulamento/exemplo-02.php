<?php

 //proteger ou controlar quem pode ver o quê

//quem pode acessar e em quais circunstâncias

class Pessoa {

	public $nome = "Rasmus Lerdorf";
	//Só a propria classe ou herdeiros podem acessar
	protected $idade = 48;
	//Só a propria classe pode acessar
	private $senha = "123456";

	public function verDados() {
		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}

}

class Programador extends Pessoa {


	public function verDados() {

		echo get_class($this) .  "<br>";

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}

}



$objeto = new Programador();
echo $objeto->nome . "<br>";

//echo $objeto->senha . "<br>";

$objeto->verDados();




?>