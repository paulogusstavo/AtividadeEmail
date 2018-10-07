<?php require_once "header.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Nova Mensagem</title>
	<meta charset="utf-8">

</head>
<body>

	<h1>Necessario HTML desta pagina</h1>
	<h1>Necessario verificacao de campos na pagina</h1>
	<p>Inclusao de mensagem <b>funcionando</b>.</p>

	<form id="formMensagem" action="../index.php" method="POST">
		<span>para:</span>
		<input type="text" name="para" id="para" /> <br>

		<span>cc:</span>
		<input type="text" name="cc" id="cc" /><br>

		<span>assunto:</span>
		<input type="text" name="assunto" id="assunto" /><br>

		<span>conteudo:</span>
		<input type="text" name="conteudo" id="conteudo" /><br>

		<button type="submit">Enviar</button>
	</form>


</body>
</html>