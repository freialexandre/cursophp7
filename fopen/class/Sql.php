<?php


class Sql extends PDO {

	private $conn;
	
	public function __construct() {
		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "12345678");
	}

	private function setParams($statment, $parameters = array()) {
		foreach ($parameters as $key => $value) {
			$this->setParam($statment, $key, $value);
		}
	}

	private function setParam($statment, $key, $value) {
		$statment->bindParam($key, $value);
	}


	public function query($rawQuery, $params = array()) {
		$stmt = $this->conn->prepare($rawQuery);
		//associar os parmametros
		$this->setParams($stmt, $params);
		$stmt->execute();
		return $stmt;

		}

		// :array - quer dizer que esse metodo retorna um array
	public function select($rawQuery, $params = array()) {
		 $stmt = $this->query($rawQuery, $params);
		 //FETC_ASSOC vem só os dados associativos, sem os numeros, index
		 return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}


}











?>