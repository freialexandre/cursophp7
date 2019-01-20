<?php

//recebe o nome do namespace + /nome da classe
namespace Cliente;

	//volta na pasta raiz e pega o Cadastro que está lá
	class Cadastro extends \Cadastro {

		public function registrarVenda() {

			echo "foi registrada uma venda para o cliente " . $this->getNome();
		}



	
	}





?>