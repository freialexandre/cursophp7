<?php


namespace Cliente;
//recebe o nome do namespace + /nome da classe


	//volta na pasta raiz e pega o Cadastro que está lá
	class Cadastro extends \Cadastro{

		public function registrarVenda() {
			//echo "foi registrada uma venda para o cliente " . $this->getNome();
			echo "foi registrada uma venda para o cliente ";
		}


	
	}





?>