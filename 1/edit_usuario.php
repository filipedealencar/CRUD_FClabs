<?php
session_start();
include_once("../conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Editar</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../assets/css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../assets/css/style.css" />
</head>

<body>

<br>


	<h1 style="text-align:center">Editar Usuário</h1>
<div style="width: 49%;margin-left: 25%">
<ul style="margin-top: 50px">
<li><a href="cad_usuario.php">Cadastrar</a></li>
	<li><a href="index.php">Listar</a></li>
	<li><a href="pesquisar.php">Pesquisar</a>
</ul></div>

<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: #f3f3f3;
}

li {
  float: left;
}

li a {
  display: block;
  color: #666;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #ddd;
}

li a.active {
  color: white;
  background-color: #04AA6D;
}
</style>



	<?php
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	?>


	<div id="teste">
		<div id="booking" class="section">
			<div class="section-center">
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-md-push-5">

						</div>
						<div class="col-md-4 col-md-pull-7">
							<div class="booking-form">
								<form method="POST" action="proc_edit_usuario.php">
								<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<span class="form-label">Nome do Usuário</span>
												<input name="nome" class="form-control" type="text" name="nome" placeholder="Digite seu nome completo" value="<?php echo $row_usuario['nome']; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<span class="form-label">Login</span>
												<input name="login_user" class="form-control" type="text" name="login" placeholder="Escolha um login" value="<?php echo $row_usuario['login_user']; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<span class="form-label">Nome da Mãe</span>
												<input name="nome_mae" class="form-control" type="text" name="nome_mae" placeholder="Digite o nome de sua mãe" value="<?php echo $row_usuario['nome_mae']; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<span class="form-label">E-mail</span>
											<input name="email" class="form-control" type="email" name="email" placeholder="Digite o seu melhor e-mail" value="<?php echo $row_usuario['email']; ?>">

										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<span class="form-label">Senha</span>
												<input name="senha" class="form-control" type="password" name="senha" placeholder="Digite uma senha" value="<?php echo $row_usuario['senha']; ?>">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<span class="form-label">CPF</span>
												<input name="cpf" class="form-control" type="text" name="cpf" placeholder="Digite o seu CPF" value="<?php echo $row_usuario['cpf']; ?>">
											</div>
										</div>
									</div>
									<div class="row">

										<div class="col-sm-6">
											<span class="form-label">Telefone</span>
											<input name="telefone" class="form-control" type="number" name="telefone" placeholder="Digite o seu telefone" value="<?php echo $row_usuario['telefone']; ?>">

										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<span class="form-label">Data de Nascimento</span>
												<input name="dt_nascimento" class="form-control" type="date" placeholder="Digite o sua data de nascimento" value="<?php echo $row_usuario['dt_nascimento']; ?>">
											</div>
										</div>
									</div>
									<div class="row ">
										<div class="col-sm-6">
											<div class="form-group">
											<span class="form-label">Status do Usuário</span>
												<select data-trigger="" class="form-control"  name="user_status" value="<?php echo $row_usuario['user_status']; ?>">>
													<option value="Ativo">Ativo</option>
													<option value="Inativo">Inativo</option>
													<option value="Bloqueado">Bloqueado</option>
												</select>
											</div>
										</div>
									</div>

									<div class="form-btn">
										<button class="submit-btn">Editar</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>