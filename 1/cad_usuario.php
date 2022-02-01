<?php
session_start();
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

<h1 style="text-align:center">Cadastrar Usuário</h1>
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

		<div id="booking" class="section">
			<div class="section-center">
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-md-push-5">

						</div>
						<div class="col-md-4 col-md-pull-7">
							<div class="booking-form">
								<form method="POST" action="proc_cad_usuario.php">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<span class="form-label">Nome do Usuário</span>
												<input name="nome" class="form-control" type="text" placeholder="Digite seu nome completo" required>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<span class="form-label">Login</span>
												<input name="login_user" class="form-control" type="text" placeholder="Escolha um login" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<span class="form-label">Nome da Mãe</span>
												<input name="nome_mae" class="form-control" type="text" placeholder="Insira o nome completo de sua mãe" required>
											</div>
										</div>
										<div class="col-sm-6">
											<span class="form-label">E-mail</span>
											<input name="email" class="form-control" type="text" placeholder="Insira o Email" required>

										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<span class="form-label">Senha</span>
												<input name="senha" class="form-control" type="password" placeholder="Insira a senha" required>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<span class="form-label">CPF</span>
												<input name="cpf" class="form-control" type="text" placeholder="Insira seu CPF" required>
											</div>
										</div>
									</div>
									<div class="row">
										
										<div class="col-sm-6">
											<span class="form-label">Telefone</span>
											<input name="telefone" class="form-control" type="tel" placeholder="Ex: (81)99999-9999" required>

										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<span class="form-label">Data de Nascimento</span>
												<input name="dt_nascimento" class="form-control" type="date" required>
											</div>
										</div>
									</div>
									<div class="row">
										
									</div>

									<div class="form-btn">
										<button type="submit" value="Cadastrar" class="submit-btn">Cadastrar</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
</body>

</html>