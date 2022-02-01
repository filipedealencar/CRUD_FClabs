<?php
define('HOST','127.0.0.1');
define('USUARIO', 'teste');
define('SENHA','teste123');
define('DB','projeto_fc_labs');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die("Não foi possível conectar");