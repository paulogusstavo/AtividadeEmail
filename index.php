<?php require_once "pages/header.php";  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Paulo's email</title>
	
</head>
<body>

	<div class="tableRight">

		<table width="100%" cellspacing="0" id="tabelaMensagens">
				
		</table>

		<table width="100%" cellspacing="0" id="novaMensagem">
				
		</table>

	</div>

</body>
</html>

<!-- <?php
	// // SALVAR MENSAGEM EM ARQUIVO XML.
	// if(isset($_POST['para']) && isset($_POST['cc']) && isset($_POST['assunto']) && isset($_POST['conteudo'])) {
	// 	require_once "pages/mensagem.php";

	// 	new Mensagem($_POST['para'], $_POST['cc'], $_POST['assunto'], $_POST['conteudo']);
	// 	echo '<script type="text/javascript">','exibirToast("success", "Sua mensagem foi enviada!");','</script>';
	// }
?> -->