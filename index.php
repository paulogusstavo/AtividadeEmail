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

	<div class="tableTop">

		<table width="100%" cellspacing="0">
			<tr>
				<td colspan="2">
					<img src="images/menu.png">
					<input class="campo" type="text" id="Pesquisar" placeholder="Pesquisar" size="30">
				</td>
			</tr>
			<tr>
				<td width="20%" class="centralizar ajuste"><a href="pages/novaMensagem.php">+ Nova Mensagem</a></td>
				<td class="ajuste"><b><?php echo ucfirst($_GET["pasta"]) ?></b></td>
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

	<div class="tableRight">

		<table width="100%" cellspacing="0">
				<?php 
					$diretorio = "files/mensagens/".$_GET["pasta"]."/";
					$arquivos = array_diff(scandir($diretorio), array('..', '.', '.DS_Store'));

					foreach ($arquivos as $arquivo) { //Interacao com cada mensagem.
						$mensagemXML = simplexml_load_file($diretorio.$arquivo);
						
						echo "<tr>";
							echo "<td class='cutText' style='--size: 15%;'><b>$mensagemXML->para</b></td>";
							echo "<td class='cutText' style='--size: 15%;'><b>Assunto: $mensagemXML->assunto</b></td>";
							echo "<td class='cutText' style='--size: 60%;'>$mensagemXML->texto</td>";
						echo "</tr>";
					}

				?>
		</table>

	</div>

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