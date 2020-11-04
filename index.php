<?php 

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM TB_USUARIOS");

echo var_dump($usuarios);*/

// carrega um usuario 
//$root = new Usuario();
//$root->loadById(4);

// carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("an");
//echo json_encode($search);

// carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("jose","1234567890");
echo $usuario;

//echo $root;

?>