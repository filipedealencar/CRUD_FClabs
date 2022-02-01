<?php
session_start();
include_once("../conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_usuario = "DELETE FROM usuarios WHERE id='$id'";
	$resultado_usuario = mysqli_query($conexao, $result_usuario);
	if(mysqli_affected_rows($conexao)){
		$_SESSION['msg'] = "<div class='alert alert-success' role='alert'>Usuário apagado com sucesso</div>";
		header("Location: index.php");
	}else{
		
		$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro o usuário não foi apagado com sucesso</div>";
		header("Location: index.php");
	}
}else{	
	$_SESSION['msg'] = "<div class='alert alert-warning' role='alert'>Necessário selecionar um usuário</div>";
	header("Location: index.php");
}
