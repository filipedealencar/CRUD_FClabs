<?php
session_start();
include_once("../conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="author" content="colorlib.com">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,600,700" rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link href="../assets/css/main.css" rel="stylesheet" />
		<meta charset="utf-8">
		<title>Listar Usuário</title>		
	</head>
	<body>




	<div class="s009">
		<form method="POST" action="">

		<h1 style="text-align:center">Listar Usuário</h1>
		<ul style="margin-top: 50px">

			
<li><a href="cad_usuario.php">Cadastrar</a>
<li><a href="index.php">Listar</a>
<li><a href="pesquisar.php">Pesquisar</a>
</ul>

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
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		//Receber o número da página
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//Setar a quantidade de itens por pagina
		$qnt_result_pg = 3;
		
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_usuarios = "SELECT * FROM usuarios LIMIT $inicio, $qnt_result_pg";
		$resultado_usuarios = mysqli_query($conexao, $result_usuarios);
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
?>
		<div class="container">
		<div class="row table-wrapper" style="margin-top: 50px;">
			<table class="table table-hover table-striped table-bordered">
			<?php echo "<a class='btn btn-success btn-sm'  href='edit_usuario.php?id=" . $row_usuario['id'] . "'>Editar</a> <a class='btn btn-danger btn-sm' style='margin-left: 3px' href='proc_apagar_usuario.php?id=" . $row_usuario['id'] . "'>   Apagar</a>" ?>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>LOGIN</th>
                <th style="width: 10px">E-MAIL</th>
                <th>TELEFONE</th>
                <th>CPF</th>
                <th>DATA DE NASCIMENTO</th>
                <th>NOME DA MÃE</th>
                <th>STATUS</th>
                <th>DATA DE INCLUSÃO</th>
                <th>DATA DE ALTERAÇÃO</th>
            </tr>
        </thead>
        <tbody>

		<tr>
                        <th><?php echo $row_usuario['id'] ?></th>
                        <th><?php echo $row_usuario['nome'] ?></th>
                        <th><?php echo $row_usuario['login_user'] ?></th>
                        <th><?php echo $row_usuario['email'] ?></th>
                        <th><?php echo $row_usuario['telefone'] ?></th>
                        <th><?php echo $row_usuario['cpf'] ?></th>
                        <th><?php echo $row_usuario['dt_nascimento'] ?></th>
                        <th><?php echo $row_usuario['nome_mae'] ?></th>
                        <th><?php echo $row_usuario['user_status'] ?></th>
                        <th><?php echo $row_usuario['dt_inclusao'] ?></th>
                        <th><?php echo $row_usuario['dt_alteracao'] ?></th>
						

                    </tr>
		</tbody>
		</table>
		</div>
		</div>
			<?php
			;
			
		}
		
		//Paginção - Somar a quantidade de usuários
		$result_pg = "SELECT COUNT(id) AS num_result FROM usuarios";
		$resultado_pg = mysqli_query($conexao, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//Quantidade de pagina 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		//Limitar os link antes depois
		$max_links = 2;
		echo "<div style='margin-top: 20px;margin-bottom: 30px'><a href='index.php?pagina=1'>Primeira</a> ";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){
				echo "<a href='index.php?pagina=$pag_ant'>$pag_ant</a> ";
			}
		}
			
		echo "$pagina ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='index.php?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}
		
		echo "<a href='index.php?pagina=$quantidade_pg'>Ultima</a></div>";
		
		?>	
		</form>

</div>	
	</body>
</html>
<style>
    .table-wrapper {
      max-height: 500px;
      overflow-y: auto;
    }
  </style>