<?php 
	session_start();

	#Redireciona usuarios nao autenticados para a pagina de login.php
	$paginaAtual = strtolower($_SERVER['PHP_SELF']);
	if(!isset($_SESSION['usuario']) && $paginaAtual != '/login.php') {
		
		$parts = Explode('/', $paginaAtual);

		if ($parts[count($parts) - 1] == 'index.php')
			header("Location: pages/login.php");
		else
			header("Location: login.php");
		exit;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Paulo's Email</title>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/toastr.js.map"></script>
	<script src="js/toastr.min.js"></script>
	<script src="js/functions.js"></script>
	<link href="css/toastr.min.css" rel="stylesheet">
	<link href="css/home.css" rel="stylesheet">

</head>
<body>

	<div class="tableTop">

		<table width="100%" cellspacing="0">
			<tr>
				<td colspan="2">
					<img src="images/menu.png">
					<input class="campo" type="text" id="pesquisar" 
					placeholder="Pesquisar" size="30" onkeyup="pesquisar()">
				</td>
			</tr>
			<tr>
				<td id="nova_mensagem" width="20%" class="centralizar ajuste">+ Nova Mensagem</td>
				<td id="titulo" class="ajuste">BEM VINDO!</td>
			</tr>
		</table>

	</div>

	<div class="tableLeft">

		<table width="100%" cellspacing="0">
			<tr>
				<td><img src="images/menu.png"></td>
				<td>Favoritos</td>
			</tr>

			<tr>
				<td><img src="images/menu.png"></td>
				<td id="caixa_entrada">Caixa de Entrada</td>
			</tr>

			<tr>
				<td><img src="images/menu.png"></td>
				<td>Lixo eletrônico</td>
			</tr>

			<tr>
				<td><img src="images/menu.png"></td>
				<td>Rascunho</td>
			</tr>

			<tr>
				<td><img src="images/menu.png"></td>
				<td id="enviadas">Itens Enviados</td>
			</tr>

			<tr>
				<td><img src="images/menu.png"></td>
				<td id="excluidos">Itens Excluídos</td>
			</tr>

			<tr>
				<td><img src="images/menu.png"></td>
				<td>Arquivo Morto</td>
			</tr>
		</table>

	</div>

</body>
</html>