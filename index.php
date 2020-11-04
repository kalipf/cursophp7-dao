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
//$usuario = new Usuario();
//$usuario->login("user","12345");
//echo $usuario;

// criando um novo usuario 
//$aluno = new Usuario("aluno", "@luno");
//$aluno->insert();
//echo $aluno;

// atualiza usuario

$usuario = new Usuario();

$usuario->loadById(7);
$usuario->update("rogerio ceni", "000144");
echo $usuario;



//echo $root;

?>