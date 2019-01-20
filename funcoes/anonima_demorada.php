<?php



//nao tem return

function test($callback) {

	$file = "1.jpg";
	$newfile = "2.jpg";

	if (!copy($file, $newfile)) {
		echo "falha na copia";
	} else {
		echo "Deu certo";
	}
	//return $result;


}

	


//CHAMANDO FUNÇÃO ANONIMA:
//PASSANDO UMA FUNCAO COMO PARAMETRO
test(function(){
	//nao esta dando certo a linha de baixo:
	echo "Terminou!";
	//pode ser enviar um email, etc
});



// COLOCAR FUNCAO DENTRO







?>