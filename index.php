<?php
require_once("config.php");
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//carregar 1 usuario
/*$root = new Usuario();
$root->loadById(3);
echo $root;*/

//Carrega uma lista de usuarios
/*$lista = Usuario::getList();
echo json_encode($lista);*/

//Carrega uma lista de usuarios buscando pelo login
/*$search = Usuario::search("ra");
echo json_encode($search);*/

//Carrega um usuario usando o login e a senha
/*$usuario = new Usuario();
$usuario->login('root','banana');
echo $usuario;*/

//Criando um novo usuario
/*$aluno = new Usuario("asluno", "asno");
$aluno->insert();
echo $aluno;*/

//Alterar um usuario
/*$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", "!@#$%¨&*");
echo $usuario;*/

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;

?>