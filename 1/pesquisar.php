<?php
include_once "../conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="author" content="colorlib.com">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,600,700" rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link href="../assets/css/main.css" rel="stylesheet" />
	<title>Buscar Usuários</title>
</head>

<body>


	<div class="s009">

		<form method="POST" action="">
			<div class="inner-form">
				<div class="basic-search">
					<div class="input-field">
						<input id="search" name="nome" type="text" placeholder="Buscar Usuários" />
						<div class="icon-wrap">
							<button name="SendPesqUser" type="submit" value="Pesquisar">
								<svg class="svg-inline--fa fa-search fa-w-16" fill="#ccc" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
									<path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
								</svg>
							</button>
						</div>
					</div>
				</div>
				<div id="accordion">
					<div class="card">
						<div class="card-header" id="headingOne">

						</div>


					</div>

		</form>

	</div>

	</form>

	<?php
	$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);


	if ($SendPesqUser) {
		$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
		$result_usuario = "SELECT * FROM usuarios WHERE nome LIKE '%$nome%'";
		$resultado_usuario = mysqli_query($conexao, $result_usuario);
		while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
	?>
			<div class="container">
				<div class="row">
					<div class="col-sm" style="border-bottom: solid">
						<?php echo "<div style='font-weight: bolder;font-size: larger; margin-top: 10%;'>ID: </div><div>" . $row_usuario['id'] . "</div>" ?>
					</div>
					<div class="col-sm" style="border-bottom: solid">
						<?php echo "<div style='font-weight: bolder;font-size: larger; margin-top: 10%;'>Status: </div><div>" . $row_usuario['user_status'] . "</div>" ?>
					</div>
					<div class="col-sm" style="border-bottom: solid">
						<?php echo "<div style='font-weight: bolder;font-size: larger; margin-top: 10%;'>Nome: </div><div>" . $row_usuario['nome'] . "</div>" ?>
					</div>
					<div class="col-sm" style="border-bottom: solid; ">
						<?php echo "<div style='font-weight: bolder;font-size: larger; margin-top: 10%;'>E-mail: </div><div> " . $row_usuario['email'] . "</div>" ?>
					</div>
					<div class="col-sm" style="border-bottom: solid; display: flex; align-items: flex-start;">
						<?php echo "<a class='btn btn-success btn-sm' href='edit_usuario.php?id=" . $row_usuario['id'] . "' style='margin-top: 20%;'>Editar</a>" ?>
						<?php echo "<a class='btn btn-danger btn-sm' href='proc_apagar_usuario.php?id=" . $row_usuario['id'] . "' style='margin-top: 20%; margin-left: 2px'>Apagar</a>" ?>
					</div>
				</div>
			</div>
	<?php

		}
	}
	?>
	</div>
	<script src="../assets/extention/choices.js"></script>

	<script>
		const customSelects = document.querySelectorAll("select");
		const deleteBtn = document.getElementById('delete')
		const choices = new Choices('select', {
			searchEnabled: false,
			itemSelectText: '',
			removeItemButton: true,
		});
		deleteBtn.addEventListener("click", function(e) {
			e.preventDefault()
			const deleteAll = document.querySelectorAll('.choices__button')
			for (let i = 0; i < deleteAll.length; i++) {
				deleteAll[i].click();
			}
		});
	</script>
	<style>
		.table-wrapper {
			max-height: 500px;
			overflow-y: auto;
		}
	</style>
</body>

</html>