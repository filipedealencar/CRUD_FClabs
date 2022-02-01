<?php
session_start();
include_once("../conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$login = filter_input(INPUT_POST, 'login_user', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$dt_nascimento = filter_input(INPUT_POST, 'dt_nascimento', FILTER_SANITIZE_NUMBER_INT);
$nome_mae = filter_input(INPUT_POST, 'nome_mae', FILTER_SANITIZE_STRING);
$status = filter_input(INPUT_POST, 'user_status', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";



$result_usuario = "UPDATE `usuarios` SET `nome`='$nome',`login_user`='$login',`senha`='$senha',`email`='$email',`telefone`='$telefone',`cpf`='$cpf',`dt_nascimento`='$dt_nascimento',`nome_mae`='$nome_mae',`user_status`='$status',`dt_inclusao`= NOW(),`dt_alteracao`= NOW() WHERE id='$id'";

$resultado_usuario = mysqli_query($conexao, $result_usuario);

if(mysqli_affected_rows($conexao)){
	$_SESSION['msg'] = "<div class='alert alert-success' role='alert'>Usuário editado com sucesso</div>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Usuário não foi editado com sucesso</div>";
	header("Location: editar.php?id=$id");
}
