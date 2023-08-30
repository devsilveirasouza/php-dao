<?php

require_once("config.php");

// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// Carrega um usuário
// echo json_encode($usuarios);
// $root = new Usuario();
// $root->loadById(1);
// echo $root;

// Carrega uma lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);

// Carrega uma lista de usuários buscando pelo login
// $param = "jo";
// $search = Usuario::search($param);
// echo json_encode($search);

// Carrega um usuário usando o login e a sua senha
$usuario = new Usuario();
$usuario->login("joao","12345678");

echo $usuario;

?>