<?php

//Polimorfismo - utiliza metodo com mesmo nome da classe abstrata porém alterado na classe filha
// ter metodos com mesmo nome na classe pai e na classe filho, que fazem coisas distintas
//Para usar o metodo da classe pai - parent::mover();   (parent::nomedometododaclassepai)


abstract class Animal {

	public function falar() {
		return "Som";
	}

	public function mover() {
		return "Anda";
	}

}

class Cachorro extends Animal {

		public function falar() {
			return "Late";
		}
}

class gato extends Animal {
	public function falar() {
		return "Mia";
	}
}

class Passaro extends Animal {
	public function falar() {
		return "Canta";
	}

	public function mover() {
		return "Voa e " . parent::mover();
	}
}





$pluto = new Cachorro();
echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";
echo "<br>";
$garfield = new Gato();
echo $garfield->falar() . "<br>";
echo $garfield->mover() . "<br>";
echo "<br>";
$ave = new Passaro();
echo $ave->falar() . "<br>";
echo $ave->mover() . "<br>";

?>