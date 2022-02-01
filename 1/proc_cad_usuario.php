<?php
session_start();
include_once("../conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$login = filter_input(INPUT_POST, 'login_user', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$dt_nascimento = filter_input(INPUT_POST, 'dt_nascimento', FILTER_SANITIZE_NUMBER_INT);
$nome_mae = filter_input(INPUT_POST, 'nome_mae', FILTER_SANITIZE_STRING);
$status = "Ativado";

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

	

$result_usuario = "INSERT INTO usuarios (id, nome, login_user, senha, email, telefone, cpf ,dt_nascimento, nome_mae, user_status, dt_inclusao, dt_alteracao	) VALUES ('','$nome', '$login', '$senha', '$email', '$telefone', '$cpf', '$dt_nascimento', '$nome_mae', '$status', NOW(), NOW())";

$resultado_usuario = mysqli_query($conexao, $result_usuario);

if(mysqli_insert_id($conexao)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: cad_usuario.php");
}
