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


	//METODO CONSTRUTOR, TODA VEZ QUE INSTANCIAR A CLASSE USUARIO, PODE PASSAR LOGIN E PASSWORD (NAO OBRIGATORIO POR CAUSA DO = "")
	public function __construct($login = "", $password = "") {
		$this->setDeslogin($login);
		$this->setDessenha($password);
	}


	//atributos preenchidos com os valores que veio do banco
	//PDO SEMPRE RETORNA UM ARRAY DE ARRAYS, MESMO TENDO UM REGISTRO APENAS!
	public function loadById($id) {
		$sql = new Sql();
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
			":ID"=>$id));

			//if(isset($results[0])) {  //Também da certo
			if (count($results) > 0) {
				//$row = $results[0];
				//manda os dados trazidos do banco, para os setters, carrega os dados do Banco para o Objeto
				$this->setData($results[0]);
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
				//manda os dados trazidos do banco, para os setters, carrega os dados do Banco para o Objeto
				$this->setData($results[0]);

			} else {
				throw new Exception("Login e/ou senha inválidos");
			}
	}


	//	recebe um array em $data, poderia ser $data = array() e faz os Setters
	public function setData($data) {
		$this->setIdusuario($data['idusuario']);
		$this->setDeslogin($data['deslogin']);
		$this->setDessenha($data['dessenha']);
		$this->setDtcadastro(new DateTime($data['dtcadastro']));

	}




	//PARA INSERIR REGISTROS, AO INVES DO USAR A FUNCAO sql-QUERY, vamos criar uma procedure e trazer o id depois de iserir o registro - fazendo um SELECT (poque ela traz o resultado) ao inves da funcao QUERY da classe Sql
	//Quando a stored procedure for executada dentro do banco, vai retornar o ID do registro inserido
	public function insert() {
		$sql = new Sql();
		$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
			":LOGIN"=>$this->getDeslogin(),
			":PASSWORD"=>$this->getDessenha()
		));

		if (isset($results[0])) {
			$this->setData($results[0]);
		}

	}



	public function update($login, $password) {
		$this->setDeslogin($login);
		$this->setDessenha($password);

		$sql = new Sql();
		$sql->query("UPDATE tb_usuarios SET deslogin = :DESLOGIN, dessenha = :PASSWORD 
			WHERE idusuario = :ID", array(
				":DESLOGIN"=>$this->getDeslogin(),
				":PASSWORD"=>$this->getDessenha(),
				":ID"=>$this->getIdusuario()
			));


	}


	public function delete() {
		$sql = new Sql();
		$sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(
			":ID"=>$this->getIdusuario()
		));
		/*
		$this->setIdusuario(0);
		$this->setDeslogin("");
		$this->setDessenha("");
		$this->setDtcadastro(new DateTime());
		*/
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