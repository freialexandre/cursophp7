<?php

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo {

	public function acelerar($velocidade) {
		echo "O veiculo acelerou ate " . $velocidade . "km/h"  . "<br>";
	}

	public function frenar($velocidade) {
		echo "O veiculo frenou até " . $velocidade . "km/h"  . "<br>";
	}

	public function trocarMarcha($marcha) {
		echo "O veiculo engatou a marcha " . $marcha . "<br>";
	}


}


class DelRey extends Automovel {

	public function empurrar() {
		echo "Empurrado!!!"  . "<br>";

	}

}

$carro = new DelRey();
$carro->acelerar(200);

$delRey1 = new DelRey();
$delRey1->empurrar();






?>