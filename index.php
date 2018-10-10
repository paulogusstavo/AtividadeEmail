<?php require_once "pages/header.php";  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Paulo's email - HOME</title>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/toastr.js.map"></script>
	<script src="js/toastr.min.js"></script>
	<script src="js/login.js"></script>
	<link href="css/toastr.min.css" rel="stylesheet">
	<link href="css/home.css" rel="stylesheet">

</head>
<body>

	<table width="100%" cellspacing="0">
		
		<tr>
			<td width="2%"><img src="images/menu.png" width="80%" height="80%"></td>
			<td width="2%"><input class="campo" type="text" id="Pesquisar" placeholder="Pesquisar" size="30"></td>
			<td width="70%"></td>
		</tr>

		<tr>
			<td></td>
			<td><a href="pages/novaMensagem.php">+ Nova Mensagem</a></td>
			<td><b>Caixa de Entrada</b></td>
		</tr>

		<tr>
			<td class="linha"><img src="images/menu.png" width="80%" height="80%"></td>
			<td class="linha">Favoritos</td>
			<td></td>
		</tr>

		<tr>
			<td class="outraLinha"><img src="images/menu.png" width="80%" height="80%"></td>
			<td class="outraLinha">Caixa de Entrada</td>
			<td></td>
		</tr>

		<tr>
			<td class="linha"><img src="images/menu.png" width="80%" height="80%"></td>
			<td class="linha">Lixo eletronico</td>
			<td></td>
		</tr>

		<tr>
			<td class="outraLinha"><img src="images/menu.png" width="80%" height="80%"></td>
			<td class="outraLinha">Rascunho</td>
			<td></td>
		</tr>

		<tr>
			<td class="linha"><img src="images/menu.png" width="80%" height="80%"></td>
			<td class="linha">Itens Enviados</td>
			<td></td>
		</tr>

		<tr>
			<td class="outraLinha"><img src="images/menu.png" width="80%" height="80%"></td>
			<td class="outraLinha">Itens Excluidos</td>
			<td></td>
		</tr>

		<tr>
			<td class="linha"><img src="images/menu.png" width="80%" height="80%"></td>
			<td class="linha">Arquivo Morto</td>
			<td></td>
		</tr>

	</table>

</body>
</html>

<?php
	// SALVAR MENSAGEM EM ARQUIVO XML.
	if(isset($_POST['para']) && isset($_POST['cc']) && isset($_POST['assunto']) && isset($_POST['conteudo'])) {
		require_once "pages/mensagem.php";

		new Mensagem($_POST['para'], $_POST['cc'], $_POST['assunto'], $_POST['conteudo']);
		echo '<script type="text/javascript">','exibirToast("success", "Sua mensagem foi enviada!");','</script>';
	}
?>