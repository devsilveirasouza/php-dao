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
// $usuario = new Usuario();
// $usuario->login("joao","12345678");
// echo $usuario;

// Método insert
// $aluno = new Usuario();
// $aluno->setDeslogin("aluno5");
// $aluno->setDessenha("#lun*");
// $aluno->insert();
// echo $aluno;

// Método insert usando o constructor
// $aluno = new Usuario("aluno12","al!un9");
// $aluno->insert();
// echo $aluno;

// Atualizar o usuário
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", "!b40j%lfb*ng%");

echo $usuario;

?>