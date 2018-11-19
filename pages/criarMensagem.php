<?php
	// SALVAR MENSAGEM EM ARQUIVO XML.
	if(isset($_POST['para']) && isset($_POST['cc']) && isset($_POST['assunto']) && isset($_POST['conteudo'])) {
		
		require_once "mensagem.php";
		new Mensagem($_POST['para'], $_POST['cc'], $_POST['assunto'], $_POST['conteudo']);
		echo "SUCESSO";
	}

?> 