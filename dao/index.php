<?php


require_once("config.php");


//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
//echo json_encode($usuarios);


//CARREGA APENAS UM USUARIO
echo "TRAZ UM USUARIO ESPECIFICO por ID . <br>";
$usuario = new Usuario();
$usuario->loadById(5);
echo $usuario;

echo "<br>  ________________________________________  <br>";

//CARREGA TODOS OS USUARIOS
//Como a classe não usou $this e foi criada como "public static", pode chama-la de modo anonimo
echo "LISTA TODOS OS USUARIOS . <br>";
$lista = Usuario::getList();
//$lista = new Usuario();
//$todoMundo = $lista->getList();
echo json_encode($lista);

echo "<br>  ________________________________________  <br>";

//CARREGA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN
echo "USUARIOS QUE CONTENHAM -NOVO- NO NOME: . <br>";
$busca = Usuario::search("novo");
echo json_encode($busca);

echo "<br>  ________________________________________  <br>";

//CARREGA UM USUARIO USANDO LOGIN E SENHA
echo "CARREGA UM USUARIO ESPECIFICO, USANDO LOGIN E SENHA . <br>";
$usuario = new Usuario();
$usuario->login("novoUser1", "1234");
echo json_encode($usuario);

echo "<br>  ________________________________________  <br>";

//INSERE USUARIO NO BANCO USANDO PROCECURE CRIADO NO MYSQL (STORED PROCEDURES) E TRAZ OS DADOS DO ULTIMO REGISTRO INSERIDO
echo "INSERE UM USUARIO, INFORMANDO NOME E SENHA PRA ELE . <br>";
$aluno = new Usuario("usuarioFulanoZ", "hhhhh");
$aluno->insert();
echo $aluno;

echo "<br>  ________________________________________  <br>";

//ALTERANDO UM LOGIN OU SENHA
$usuario = new Usuario();
//PRECISA CARREGAR UM USUARIO PARA DEPOIS ALTERA-LO
$usuario->loadById(8);
$usuario->update("NovoUser33", "senhaAlterada");
echo $usuario;


?>