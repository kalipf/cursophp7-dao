<?php 

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM TB_USUARIOS");

echo var_dump($usuarios);*/


$root = new Usuario();

$root->loadById(4);

echo $root;

?>