<?php
session_start();
include ('conexao.php');

if(empty($_POST['username']) || empty($_POST['pass'])){
    header('Location: index.php');
    exit();
}?>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<?php

$usuario = mysqli_real_escape_string($conexao, $_POST['username']);
$senha = mysqli_real_escape_string($conexao, $_POST['pass']);
$statusInativo = "SELECT login_user FROM usuarios where login_user = '{$usuario}' and senha = '{$senha}' and user_status = 'Inativo'";
$statusBloqueado = "SELECT login_user FROM usuarios where login_user = '{$usuario}' and senha = '{$senha}' and user_status = 'Bloqueado'";
$query = "SELECT login_user, senha FROM usuarios where login_user = '{$usuario}' and senha = '{$senha}' and user_status = 'Ativo'";
$result = mysqli_query($conexao, $query);

$resultInativo = mysqli_query($conexao, $statusInativo);
$resultBloqueado = mysqli_query($conexao, $statusBloqueado);

$row = mysqli_num_rows($result);
$rowBloqueado = mysqli_num_rows($resultBloqueado);
$rowInativo = mysqli_num_rows($resultInativo);


if($row == 1){
    $_SESSION['username'] = $usuario;
    header('Location: 1/index.php');
    exit();
}else{
if($rowBloqueado == 1) {
    echo "<center><div class='alert alert-danger' role='alert' style='margin-top: 20px'>Usuário Bloquedo. Entre em contato com o Administrador</div></br><a class='btn btn-primary btn-lg active' href='index.php'>Clique aqui Para Retornar</a><br></center>";
    exit();
    exit();
}if($rowInativo == 1){
    echo "<center><div class='alert alert-danger' role='alert' style='margin-top: 20px'>Usuário Inativo. Entre em contato com o Administrador</div></br><a class='btn btn-primary btn-lg active' href='index.php'>Clique aqui Para Retornar</a><br></center>";
    exit();
}
}