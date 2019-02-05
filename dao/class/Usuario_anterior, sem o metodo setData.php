<?php


class Usuario {

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	public function getIdusuario() {
	    return $this->Idusuario;
	}
	 
	public function setIdusuario($value) {
	    $this->Idusuario = $value;
	}

	public function getDeslogin() {
	    return $this->deslogin;
	}
	 
	public function setDeslogin($value) {
	    $this->deslogin = $value;
	}

	public function getDessenha() {
	    return $this->dessenha;
	}
	 
	public function setDessenha($value) {
	    $this->dessenha = $value;
	}

	public function getDtcadastro() {
	    return $this->dtcadastro;
	}
	 
	public function setDtcadastro($value) {
	    $this->dtcadastro = $value;
	}

	//atributos preenchidos com os valores que veio do banco
	//PDO SEMPRE RETORNA UM ARRAY DE ARRAYS, MESMO TENDO UM REGISTRO APENAS!
	public function loadById($id) {
		$sql = new Sql();
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
			":ID"=>$id));

			//if(isset($results[0])) {  //Também da certo
			if (count($results) > 0) {
				$row = $results[0];
				//manda os dados trazidos do banco, para os setters, carrega os dados do Banco para o Objeto
				$this->setIdusuario($row['idusuario']);
				$this->setDeslogin($row['deslogin']);
				$this->setDessenha($row['dessenha']);
				$this->setDtcadastro(new DateTime($row['dtcadastro']));

			}
	}


	public static function getList() {
		$sql = new Sql();
		return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
	}


	public static function search($login) {
		$sql = new Sql();
		return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
			":SEARCH"=>"%".$login."%")
			);
	}


	public function login($login, $password) {
		$sql = new Sql();
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
			":LOGIN"=>$login,
			":PASSWORD"=>$password
			));

			//if(isset($results[0])) {  //Também da certo
			if (count($results) > 0) {
				$row = $results[0];
				//manda os dados trazidos do banco, para os setters, carrega os dados do Banco para o Objeto
				$this->setIdusuario($row['idusuario']);
				$this->setDeslogin($row['deslogin']);
				$this->setDessenha($row['dessenha']);
				$this->setDtcadastro(new DateTime($row['dtcadastro']));

			} else {
				throw new Exception("Login e/ou senha inválidos");
			}
	}

	//PARA INSERIR REGISTROS, AO INVES DO USAR A FUNCAO sql-QUERY, vamos criar uma procedure e trazer o id depois de iserir o registro - fazendo um SELECT (poque ela traz o resultado) ao inves da funcao QUERY da classe Sql
	//Quando a procedure for executada dentro do banco, vai retornar o ID do registro inserido
	public function insert() {
		$sql = new Sql();
		//results vai virar metodo pois esta repetitivo nas funcoes
		$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
			":LOGIN"=>$this->getDeslogin(),
			":PASSWORD"=>$this->getDessenha()
		));


	}



	public function __toString() {

		return json_encode(array(
			"USUARIO"=>$this->getIdusuario(),
			"LOGIN"=>$this->getDeslogin(),
			"SENHA"=>$this->getDessenha(),
			"DATA_CADASTRO"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
		));

	}

}






?>