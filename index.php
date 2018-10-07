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

</head>
<body>

	<h1>Página inicial</h1>

	<p>Necessário criar HTML desta página. <b style="color: red;">Issue #3</b></p>

	<br><br><br>

	<h3>CRIAR NOVA MENSAGEM.</h3>
	<a href="pages/novaMensagem.php"><button>NOVA MENSAGEM</button></a>

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