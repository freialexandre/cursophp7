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
$usuario->login("novoUser3", "zzzzzz");
echo json_encode($usuario);


?>