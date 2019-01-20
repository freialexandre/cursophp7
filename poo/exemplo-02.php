<?php



class Carro {

	private $modelo;
	private $motor;
	private $ano;

	public function getModelo() {
		return $this -> modelo;
	}

	public function setModelo($modelo) {
		$this -> modelo = $modelo;
	}

	public function getMotor() {
		return $this -> motor;
	}

	public function setMotor($motor) {
		$this -> motor = $motor;
	}

	public function getAno():int {
		return $this -> ano;
	}

	public function setAno($ano) {
		$this -> ano = $ano;
	}

	public function exibir() {
		return array(
			"modelo " => $this->getModelo(),
			"motor " => $this->getMotor(),
			"ano " => $this->getAno()
		);
	}


}


$carro1 = new Carro();
$carro1->setModelo("Astra");
$carro1->setMotor("2.0");
$carro1->setAno("2010");

echo "Exibindo com print_r:";
echo "<br>";
print_r ($carro1->exibir());
echo "<br>" . "<br>";
echo "Exibindo com var_dump:";
var_dump($carro1->exibir());



?>